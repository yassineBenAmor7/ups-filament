<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use App\Filament\Resources\BaseResource;

class UserResource extends BaseResource
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
                    ->required(fn($context) => $context === 'create')
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn($state) => !empty($state) ? bcrypt($state) : null)
                    ->dehydrated(fn($state) => filled($state)),

                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->visible(fn() => auth()->user()->hasRole('super_admin')),

                Forms\Components\Toggle::make('is_validated')
                    ->label('Validated Account')
                    ->default(false)
                    ->visible(fn() => auth()->user()->can('validate_user')),
                TextInput::make('name_ar'),
                TextInput::make('phone'),
                TextInput::make('cin'),
                TextInput::make('avatar'),
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
    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('name'),
            static::CustomTextColumn('cin'),
            static::CustomTextColumn('phone'),
            static::CustomTextColumn('email')
                ->copyable(),

            Tables\Columns\TextColumn::make('roles')
                ->label('Roles')
                ->formatStateUsing(fn($record) => $record->roles->pluck('name')->join(', '))
                ->badge()
                ->searchable(false),
            ToggleColumn::make('is_validated')
                ->label('Validated'),
            static::CustomTextColumn('genre'),

            ToggleColumn::make('publier')
                ->label("Publish")
        ];
    }
    public static function getExtraFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('roles')
                ->relationship('roles', 'name')
                ->multiple()
                ->preload(),

            Tables\Filters\Filter::make('validated')
                ->query(fn(Builder $query): Builder => $query->where('is_validated', true))
                ->label('Only Validated Users'),

            Tables\Filters\Filter::make('Published')
                ->query(fn(Builder $query): Builder => $query->where('publier', true))
                ->label('Only Published Users'),
        ];
    }
    public static function table(Table $table): Table
    {
        return parent::table($table);
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
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
