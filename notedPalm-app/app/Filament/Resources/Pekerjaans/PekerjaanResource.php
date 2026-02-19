<?php

namespace App\Filament\Resources\Pekerjaans;

use App\Filament\Resources\Pekerjaans\Pages\CreatePekerjaan;
use App\Filament\Resources\Pekerjaans\Pages\EditPekerjaan;
use App\Filament\Resources\Pekerjaans\Pages\ListPekerjaans;
use App\Filament\Resources\Pekerjaans\Schemas\PekerjaanForm;
use App\Filament\Resources\Pekerjaans\Tables\PekerjaansTable;
use App\Models\Pekerjaan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PekerjaanResource extends Resource
{
    protected static ?string $model = Pekerjaan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pekerjaan';

    public static function form(Schema $schema): Schema
    {
        return PekerjaanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PekerjaansTable::configure($table);
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
            'index' => ListPekerjaans::route('/'),
            'create' => CreatePekerjaan::route('/create'),
            'edit' => EditPekerjaan::route('/{record}/edit'),
        ];
    }
}
