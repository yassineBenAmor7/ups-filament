<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Stages;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StagesResource\Pages;
use App\Filament\Resources\StagesResource\Pages\CreateStages;
use App\Filament\Resources\StagesResource\Pages\EditStage;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StagesResource extends BaseResource
{
    protected static ?string $model = Stages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('candidat_1_id')->numeric(),
                TextInput::make('candidat_2_id')->numeric(),
                TextInput::make('candidat_3_id')->numeric(),
                TextInput::make('entreprise_id')->numeric(),
                TextInput::make('candidat_1_name'),
                TextInput::make('candidat_2_name'),
                TextInput::make('candidat_3_name'),
                TextInput::make('encadrant_name'),
                Textarea::make('sujet'),
                TextInput::make('domaine'),
                Textarea::make('description'),
                TextInput::make('duree'),
                TextInput::make('start'),
                TextInput::make('end'),
                Textarea::make('rapport'),
                TextInput::make('level'),
                TextInput::make('etat'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                DatePicker::make('created_at'),
                DatePicker::make('updated_at'),
                TextInput::make('encadrant_id')->numeric(),
                TextInput::make('avis_encadrant')->numeric(),
                TextInput::make('avis_jury')->numeric(),
                Textarea::make('remarque_jury'),
                TextInput::make('resultat_jury')->numeric(),
                Textarea::make('remarque_encadrant'),
                TextInput::make('slug'),
                TextInput::make('responsible_id')->numeric(),
                TextInput::make('status'),
                TextInput::make('type_stage'),
                Textarea::make('motivation_letter'),
                TextInput::make('offer_id')->numeric(),
                TextInput::make('company_acceptation')->numeric(),
                TextInput::make('teacher_acceptation')->numeric(),
                TextInput::make('acceptation')->numeric(),
                TextInput::make('company_validation')->numeric(),
                TextInput::make('teacher_validation')->numeric(),
                TextInput::make('validation')->numeric(),
                Textarea::make('assignment_file'),
                Textarea::make('internship_certificate'),
                Textarea::make('activities_file'),
                TextInput::make('stage_type_id')->numeric(),
                DatePicker::make('deleted_at'),
                Textarea::make('other_file'),
                Textarea::make('company_request_sheet'),
                Textarea::make('appui_request'),
                TextInput::make('responsible_name'),
                TextInput::make('responsible_email'),
                TextInput::make('year_id')->numeric(),
                Textarea::make('convention_file'),
                TextInput::make('department_id')->numeric(),
                TextInput::make('signed_by'),
                Textarea::make('convention_html'),
                TextInput::make('stage_category_id')->numeric(),
                Textarea::make('signed_convention_file'),
                TextInput::make('code'),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('candidat_1_id'),
            static::CustomTextColumn('candidat_2_id'),
            static::CustomTextColumn('candidat_3_id'),
            static::CustomTextColumn('entreprise_id'),
            static::CustomTextColumn('candidat_1_name'),
            static::CustomTextColumn('candidat_2_name'),
            static::CustomTextColumn('candidat_3_name'),
            static::CustomTextColumn('encadrant_name'),
            static::CustomTextColumn('domaine'),
            static::CustomTextColumn('level'),
            static::CustomTextColumn('etat'),
            static::CustomTextColumn('status'),
            static::CustomTextColumn('type_stage'),
            static::CustomTextColumn('created_at')->dateTime(),
            static::CustomTextColumn('updated_at')->dateTime(),
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
            'index' => Pages\ListStages::route('/'),
            'create' => Pages\CreateStages::route('/create'),
            'edit' => Pages\EditStages::route('/{record}/edit'),
        ];
    }
}
