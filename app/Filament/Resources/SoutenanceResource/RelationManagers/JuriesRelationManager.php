<?php

namespace App\Filament\Resources\SoutenanceResource\RelationManagers;

use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Tables\Actions\ActionGroup;
use Filament\Support\Enums\FontWeight;

class JuriesRelationManager extends RelationManager
{
    protected static string $relationship = 'juries';
    protected static ?string $title = 'Membres du jury';

    public static function getPosteOptions(): array
    {
        return [
            'president' => 'Président',
            'member_one' => 'Membre 1', 
            'member_two' => 'Membre 2',
            'member_three' => 'Membre 3',
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('recordId')
                    ->label('Enseignant')
                    ->required()
                    ->searchable()
                    ->options(function (RelationManager $livewire) {
                        // Get already assigned teacher IDs
                        $usedTeachers = $livewire->getOwnerRecord()
                            ->juries()
                            ->pluck('teacher_id')
                            ->toArray();
                        
                        return Teacher::whereNotIn('id', $usedTeachers)
                            ->pluck('name', 'id');
                    }),
                    
                Forms\Components\Select::make('poste')
                    ->label('Poste')
                    ->required()
                    ->options(function (RelationManager $livewire) {
                        $options = self::getPosteOptions();
                        
                        // Get already taken positions
                        $takenPositions = $livewire->getOwnerRecord()
                            ->juries()
                            ->pluck('soutenance_teachers.poste')
                            ->toArray();
                        
                        // Remove taken positions from options
                        foreach ($takenPositions as $position) {
                            unset($options[$position]);
                        }
                        
                        return $options;
                    }),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
 ->relationship(function () {
            return $this->getOwnerRecord()
                ->juries()
                ->withPivot('poste'); 
        })
         ->inverseRelationship('jurySoutenances')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Enseignant')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('pivot.poste')
                    ->label('Poste')
                    ->sortable()
                     ->weight(FontWeight::Bold)
                    ->formatStateUsing(fn ($state) => self::getPosteOptions()[$state] ?? ucfirst($state)),
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                ->label('Ajouter un membre du jury')
                    ->form(fn (Form $form): Form => $this->form($form))
                    ->using(function (BelongsToMany $relationship, array $data) {
                        // Additional validation
                        $existing = $relationship->wherePivot('poste', $data['poste'])->exists();
                        
                        if ($existing) {
                            throw new \Exception('Ce poste est déjà attribué');
                        }
                        
                        $relationship->attach($data['recordId'], [
                            'poste' => $data['poste'],
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }),
            ])
            ->actions([
               ActionGroup::make([
                 Tables\Actions\EditAction::make()
                    ->form([
                        Forms\Components\Select::make('poste')
                    ->label('Poste')
                    ->required()
                    ->options(function (RelationManager $livewire) {
                        $options = self::getPosteOptions();
                        
                        // Get already taken positions
                        $takenPositions = $livewire->getOwnerRecord()
                            ->juries()
                            ->pluck('soutenance_teachers.poste')
                            ->toArray();
                        
                        // Remove taken positions from options
                      return array_diff_key($options, array_flip($takenPositions));
                    })
                    
                        ->required(),
                        
                        
                    ]),
                // Replace Teacher Action
            Tables\Actions\Action::make('replaceTeacher')
                ->label('Replace')
                ->icon('heroicon-o-user-plus')
                ->form([
                    Forms\Components\Select::make('new_teacher_id')
                        ->label('Nouvel Enseignant')
                        ->searchable()
                        ->options(function (RelationManager $livewire) {
                            $usedTeachers = $livewire->getOwnerRecord()
                                ->juries()
                                ->pluck('teacher_id')
                                ->toArray();
                            
                            return Teacher::whereNotIn('id', $usedTeachers)
                                ->pluck('name', 'id');
                        })
                        ->required(),
                    
                    Forms\Components\Select::make('poste')
                        ->label('Poste')
                        ->options(self::getPosteOptions())
                        ->default(function ($record) {
                            return $record->pivot->poste; 
                        })
                        ->required(),
                ])
                ->action(function ($record, array $data) {
                    $this->getOwnerRecord()->juries()->detach($record->id);
                    $this->getOwnerRecord()->juries()->attach($data['new_teacher_id'], [
                        'poste' => $data['poste'],
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }),
                    
                Tables\Actions\DetachAction::make()
                ->label('Delete'),
               ])
                 ->button()
    ->label('Actions')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}