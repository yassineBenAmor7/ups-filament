<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectDocumentsResource\Pages;
use App\Filament\Resources\SubjectDocumentsResource\RelationManagers;
use App\Models\SubjectDocuments;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class SubjectDocumentsResource extends BaseResource
{
    protected static ?string $model = SubjectDocuments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                TextInput::make('order')->numeric()->nullable(),
                TextInput::make('url')->nullable(),
                TextInput::make('parent_id')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('order'),
            static::CustomTextColumn('url'),
            static::CustomTextColumn('parent_id'),
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
            'index' => Pages\ListSubjectDocuments::route('/'),
            'create' => Pages\CreateSubjectDocuments::route('/create'),
            'edit' => Pages\EditSubjectDocuments::route('/{record}/edit'),
        ];
    }
}
