<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StudentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Filament\Resources\BaseResource;

class StudentResource extends BaseResource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('annee_bac'),
                TextInput::make('section_bac'),
                TextInput::make('session_bac'),
                TextInput::make('mention_bac'),
                TextInput::make('moyenne_bac')->numeric(),
                Textarea::make('pays_bac'),
                Textarea::make('mon_pere'),
                Textarea::make('premon_pere'),
                Textarea::make('prefession_pere'),
                Textarea::make('etablissement_prof_pere'),
                Textarea::make('nom_mere'),
                Textarea::make('prenom_mere'),
                Textarea::make('etablissement_prof_mere'),
                Textarea::make('nom_jeune_fille'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                DatePicker::make('created_at'),
                DatePicker::make('updated_at'),
                DatePicker::make('deleted_at'),
                TextInput::make('diploma'),
                TextInput::make('slug'),

            ]);
    }
 public  static function getExtraColumns():array
 {
    return [
         static::CustomTextColumn('annee_bac'),
                  static::CustomTextColumn('section_bac'),
                  static::CustomTextColumn('mention_bac'),
                  static::CustomTextColumn('moyenne_bac'),
                  static::CustomTextColumn('diploma'),
                  static::CustomTextColumn('slug'),
                  static::CustomTextColumn('created_at')->dateTime(),
              
    ];
 }
    public static function table(Table $table): Table
    {
               return parent::table($table);

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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
