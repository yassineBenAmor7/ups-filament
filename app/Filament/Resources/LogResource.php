<?php

namespace App\Filament\Resources;

use Filament\Resources\Resource;
use App\Models\Log;
use App\Filament\Resources\LogResource\Pages;
use Filament\Tables;

class LogResource extends BaseResource
{
    public static ?string $model = \App\Models\Log::class;

    public static function table(\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table
            ->columns(static::getExtraColumns());
    }

    // test
    protected static function getExtraColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('table_name')->label('Table'),
            Tables\Columns\TextColumn::make('action')->label('Action'),
            Tables\Columns\TextColumn::make('description')->label('Description'),
            Tables\Columns\TextColumn::make('user_id')->label('User'),
            Tables\Columns\TextColumn::make('created_at')->label('Date')->dateTime('d/m/Y H:i'),
            Tables\Columns\TextColumn::make('designation_fr')
           ->label('Données')
           ->searchable()
           ->limit(50),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogs::route('/'),
            'view-log' => Pages\LogViewer::route('/log'),
        ];
    }

    //
}