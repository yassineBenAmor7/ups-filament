<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeachersPredefinedListsResource\Pages;
use App\Models\TeachersPredefinedLists;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

class TeachersPredefinedListsResource extends BaseResource
{
    protected static ?string $model = TeachersPredefinedLists::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('cin')->nullable(),
                TextInput::make('nom')->nullable(),
                TextInput::make('nom_ar')->nullable(),
                TextInput::make('prenom')->nullable(),
                TextInput::make('prenom_ar')->nullable(),
                TextInput::make('grade_fr')->nullable(),
                TextInput::make('grade_en')->nullable(),
                TextInput::make('grade_ar')->nullable(),
                TextInput::make('specialite_fr')->nullable(),
                TextInput::make('specialite_en')->nullable(),
                TextInput::make('specialite_ar')->nullable(),
                TextInput::make('department_id')->numeric()->nullable(),
                TextInput::make('statut_fr')->nullable(),
                TextInput::make('statut_en')->nullable(),
                TextInput::make('statut_ar')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('email')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('cin'),
            static::CustomTextColumn('nom'),
            static::CustomTextColumn('nom_ar'),
            static::CustomTextColumn('prenom'),
            static::CustomTextColumn('prenom_ar'),
            static::CustomTextColumn('grade_fr'),
            static::CustomTextColumn('grade_en'),
            static::CustomTextColumn('grade_ar'),
            static::CustomTextColumn('specialite_fr'),
            static::CustomTextColumn('specialite_en'),
            static::CustomTextColumn('specialite_ar'),
            static::CustomTextColumn('department_id'),
            static::CustomTextColumn('statut_fr'),
            static::CustomTextColumn('statut_en'),
            static::CustomTextColumn('statut_ar'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('email'),
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
            'index' => Pages\ListTeachersPredefinedLists::route('/'),
            'create' => Pages\CreateTeachersPredefinedLists::route('/create'),
            'edit' => Pages\EditTeachersPredefinedLists::route('/{record}/edit'),
        ];
    }
}
