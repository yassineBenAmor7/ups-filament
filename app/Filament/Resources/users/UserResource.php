<?php

namespace App\Filament\Resources\users;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\users\User;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\BadgeColumn;


use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\users\UserResource\Pages;
use App\Filament\Resources\users\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Fieldset::make('User Information')->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn ($context) => $context === 'create')
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => !empty($state) ? bcrypt($state) : null)
                    ->dehydrated(fn ($state) => filled($state)),

                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->visible(fn ()=>auth()->user()->hasRole('super_admin')),

                Forms\Components\Toggle::make('is_validated')
                    ->label('Validated Account')
                    ->default(false)
                    ->visible(fn () => auth()->user()->can('validate_user')),
                TextInput::make('name_ar'),
                TextInput::make('phone'),
                TextInput::make('cin'),
                FileUpload::make('avatar'),
                TextInput::make('nationalite'),
                TextInput::make('genre'),
                TextInput::make('address'),
                TextInput::make('cnss'),
                DatePicker::make('date_naissance'),
                TextInput::make('lieu_naissance'),
                Textarea::make('cv'),
                TextInput::make('description_ar'),
                TextInput::make('description_en'),
                TextInput::make('description_fr'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                TextInput::make('publier'),
                TextInput::make('folder_name'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('cin'),
                TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email')->searchable()->sortable(),

                Tables\Columns\TextColumn::make('roles')
                    ->label('Roles')
                    ->formatStateUsing(fn ($record) => $record->roles->pluck('name')->join(', '))
                    ->badge()
                    ->searchable(false),
                Tables\Columns\IconColumn::make('is_validated')
                    ->label('Validated')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('genre'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
                TextColumn::make('publier')
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->searchable()
                    ->preload(),
                Tables\Filters\SelectFilter::make('validation_status')
                    ->options([
                        'pending' => 'Pending Validation',
                        'validated' => 'Validated',
                    ])
                    ->query(fn ($query, array $data) => match ($data['value'] ?? null) {
                        'pending' => $query->where('is_validated', false),
                        'validated' => $query->where('is_validated', true),
                        default => $query,
                    }),
            ], layout: \Filament\Tables\Enums\FiltersLayout::AboveContentCollapsible)
            ->actions([
                ActionGroup::make([
                ViewAction::make(),
                EditAction::make()
                ->openUrlInNewTab(),
                DeleteAction::make(),
            ])->Button()
            ->label('Actions')


            ],position:ActionsPosition::BeforeCells)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([1, 5, 10, 20, 50, 100])
            ->reorderableColumns('users')
             ->striped();

    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [

            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
