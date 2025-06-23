<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
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
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
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
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
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
