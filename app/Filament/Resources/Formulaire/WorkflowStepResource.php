<?php

namespace App\Filament\Resources\Formulaire;

use App\Filament\Resources\Formulaire\WorkflowStepResource\Pages;
use App\Filament\Resources\Formulaire\WorkflowStepResource\RelationManagers;
use App\Models\Formulaire\WorkflowStep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LaraZeus\Bolt\Filament\Resources\BoltResource; 

class WorkflowStepResource extends BoltResource
{
    protected static ?string $model = WorkflowStep::class;

    protected static ?string $navigationIcon = 'heroicon-o-numbered-list';
     protected static ?int $navigationSort =4;
 protected static ?string $navigationLabel = 'Étapes de Decision';
    protected static ?string $recordTitleAttribute = 'name';
public static function getNavigationBadge(): ?string
{
    return (string) static::getModel()::count();
}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Nom de l\'étape'),
                 Forms\Components\Textarea::make('description')
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                  Tables\Columns\TextColumn::make('name')
                ->label('Nom')
                ->searchable(),
            Tables\Columns\TextColumn::make('forms_count')
                ->counts('forms')
                ->label('Utilisé dans (formulaires)'),
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
             RelationManagers\FormsRelationManager::class,
             RelationManagers\ApprovalsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkflowSteps::route('/'),
            'create' => Pages\CreateWorkflowStep::route('/create'),
            'edit' => Pages\EditWorkflowStep::route('/{record}/edit'),
        ];
    }
}
