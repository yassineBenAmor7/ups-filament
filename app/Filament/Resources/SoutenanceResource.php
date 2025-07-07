<?php

namespace App\Filament\Resources;
use App\Filament\Resources\SoutenanceResource\Pages;
use App\Filament\Resources\SoutenanceResource\RelationManagers;
use App\Models\Soutenance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Actions\Action;
use App\Filament\Resources\BaseResource;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Notifications\Notification;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Get;
use Closure;
class SoutenanceResource extends BaseResource
{
    protected static ?string $model = Soutenance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stage_id')
                ->label('Stage')
                ->relationship('stage', 'sujet') 
                ->searchable(),
                // ->required(),

            DatePicker::make('date')
             ->label('Date')
            ->required(),
            TimePicker::make('horaire_start')
            ->label('Heure de début')
           
            ->withoutSeconds()
            ->required(),
            TimePicker::make('horaire_end')
             ->label('Heure de fin')
             ->after('horaire_start')
            ->withoutSeconds()
            ->required(),
            Forms\Components\Select::make('department_id')
                ->label('Département')
                ->relationship('department', 'designation_fr') 
                ->searchable(),
                // ->required(),
            TextInput::make('salle')
                ->label('Salle')
                ->required()
                ->rules([
        fn (Get $get): Closure => function (string $attribute, $value, Closure $fail) use ($get) {
            $date = $get('date');
            $startTime = $get('horaire_start');
            $recordId = request()->route('record')?->id; // For edit page

            if ($date && $startTime) {
                $query = Soutenance::where('salle', $value)
                    ->where('date', $date)
                    ->where('horaire_start', $startTime);

                if ($recordId) {
                    $query->where('id', '!=', $recordId);
                }

                if ($query->exists()) {
                    $fail("Il y a déjà une soutenance prévue dans cette salle à la même date et heure.");
                }
            }
        },
    ]),
Forms\Components\Select::make('soutenance_session_id')
                ->label('Session de soutenance')
                ->relationship('soutenanceSession', 'designation_fr') 
                ->searchable(),
                // ->required(),
            Forms\Components\Textarea::make('result')
                ->label('Résultat')
                ->rows(3),
               Forms\Components\Textarea::make('pv')
                ->label('PV')
                ->rows(3),
              
            ])
             ;
            
            
    }
 public static function getExtraColumns():array
 {
    return [
       static::CustomTextColumn('stage.name')
       ->label('Stage'),
       static::CustomTextColumn('date'),
       static::CustomTextColumn('horaire_start'),
       static::CustomTextColumn('horaire_end'),
       static::CustomTextColumn('department.name')
       ->label('Département'),
       static::CustomTextColumn('salle'),
       static::CustomTextColumn('soutenanceSession.designation_fr')
       ->label('Session'),
      ToggleColumn::make('publier')
                ->label('Publiée')
                ->visible(fn(): bool => Auth::user()->can("publish_soutenance"))
                ->updateStateUsing(function (Soutenance $record, $state) {
                    if (!Auth::user()->can('publish_soutenance')) {
                        return false;
                    }
                    $record->update(['is_validated' => $state]);
                    Notification::make()
                        ->title($state ? 'Soutenance Publiée' : 'Soutenance non Publiée')
                        ->success()
                        ->send();
                    return $state;
                }),
                
    

                TextColumn::make('juries')
            ->label('Juries')
            ->action(
                Action::make('view_jury')
                    
 ->modalHeading('Membres du Jury')
                    ->modalSubheading(fn (Soutenance $record): string => 
                        'Soutenance le ' . $record->date . ' de ' . $record->horaire_start . ' à ' . $record->horaire_end
                    )                    ->modalContent(fn (Soutenance $record) => view('filament.component.modal', [
                        'data' => $record->juries()->withPivot('poste')->get(),
                       
                        'columns'=>['Nom','Poste'],
                        'row'=>fn ($item) => [
        $item->name ,
        ucfirst(str_replace('_', ' ', $item->pivot->poste ?? '')),
    ],
                    ]))
                    
                    ->modalSubmitAction(false)
                    //   ->modalCancelAction(false)
                      ->modalAlignment(Alignment::Center)
            )
            ->formatStateUsing(fn () => 'Voir Jury')
            
             ->weight('medium') 
           ->color('primary')
           
    ->alignCenter(),
           
            
    //    static::CustomTextColumn('result')->limit(50),
    //    static::CustomTextColumn('pv')->limit(50),



    ];
 }
 
    public static function table(Table $table): Table
    {
       return parent::table($table);
         
            
    }

    public static function getRelations(): array
    {
        return [
                    RelationManagers\JuriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSoutenances::route('/'),
            'create' => Pages\CreateSoutenance::route('/create'),
            'edit' => Pages\EditSoutenance::route('/{record}/edit'),
        ];
    }
}
