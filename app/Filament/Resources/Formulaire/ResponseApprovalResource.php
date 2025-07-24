<?php

namespace App\Filament\Resources\Formulaire;

use App\Filament\Resources\Formulaire\ResponseApprovalResource\Pages;
use App\Filament\Resources\Formulaire\ResponseApprovalResource\RelationManagers;
use App\Models\Formulaire\ResponseApproval;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LaraZeus\Bolt\Filament\Resources\BoltResource; 

class ResponseApprovalResource extends BoltResource
{
    protected static ?string $model = ResponseApproval::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
  protected static ?int $navigationSort =5;

    protected static ?string $recordTitleAttribute = 'name';
public static function getNavigationBadge(): ?string
{
    return (string) static::getModel()::count();
}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\Select::make('response_id')
                ->relationship('response', 'id')
                ->label('Réponse')
                ->required(),
            Forms\Components\Select::make('workflow_step_id')
                ->relationship('workflowStep', 'name')
                ->label('Étape')
                ->required(),
            Forms\Components\Select::make('status')
                ->options([
                    0 => 'En attente',
                    1 => 'Approuvé',
                    2 => 'Rejeté'
                ])
                ->required(),
            Forms\Components\Select::make('approved_by')
                ->relationship('approver', 'name')
                ->label('Approuvé par'),
            Forms\Components\Textarea::make('notes')
                ->label('Commentaires'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('response.form.name')
                ->label('Formulaire')
                ->sortable(),
            Tables\Columns\TextColumn::make('workflowStep.name')
                ->label('Étape'),
            Tables\Columns\BadgeColumn::make('status')
                ->formatStateUsing(fn ($state) => match($state) {
                    0 => 'En attente',
                    1 => 'Approuvé',
                    2 => 'Rejeté'
                })
                ->colors([
                    'warning' => 0,
                    'success' => 1,
                    'danger' => 2,
                ]),
            Tables\Columns\TextColumn::make('approver.name')
                ->label('Validé par'),
            Tables\Columns\TextColumn::make('updated_at')
                ->label('Dernière modification')
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResponseApprovals::route('/'),
            'create' => Pages\CreateResponseApproval::route('/create'),
            'edit' => Pages\EditResponseApproval::route('/{record}/edit'),
        ];
    }
}
