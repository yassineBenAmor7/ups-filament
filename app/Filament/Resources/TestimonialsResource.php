<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialsResource\Pages;
use App\Models\Testimonials;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class TestimonialsResource extends BaseResource
{
    protected static ?string $model = Testimonials::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')->numeric()->nullable(),
                TextInput::make('user_name')->nullable(),
                TextInput::make('user_avatar')->nullable(),
                Textarea::make('message')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('user_name'),
            static::CustomTextColumn('user_avatar'),
            static::CustomTextareaColumn('message'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonials::route('/create'),
            'edit' => Pages\EditTestimonials::route('/{record}/edit'),
        ];
    }
}
