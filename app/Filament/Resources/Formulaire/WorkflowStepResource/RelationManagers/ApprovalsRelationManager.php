<?php

namespace App\Filament\Resources\Formulaire\WorkflowStepResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApprovalsRelationManager extends RelationManager
{
    protected static string $relationship = 'approvals';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
               
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
          
            ->columns([
                Tables\Columns\TextColumn::make('response.form.name'),
            Tables\Columns\BadgeColumn::make('status')
                ->formatStateUsing(fn ($state) => match($state) {
                    0 => 'Pending',
                    1 => 'Approved',
                    2 => 'Rejected'
                })
                ->colors([
                    'warning' => 0,
                    'success' => 1,
                    'danger' => 2,
                ]),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
            ])
           
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
