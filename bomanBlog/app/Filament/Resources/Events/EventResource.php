<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Event;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    // protected static ?string $navigationIcon = 'heroicon-o-calendar';
    // protected static ?string $recordTitleAttribute = 'title';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\TextInput::make('title')
    //                 ->label('Judul')
    //                 ->required()
    //                 ->maxLength(150),

    //             Forms\Components\Select::make('type')
    //                 ->label('Tipe Event')
    //                 ->options([
    //                     'panen' => 'Panen',
    //                     'pupuk' => 'Pupuk',
    //                     'maintenance' => 'Maintenance',
    //                 ])
    //                 ->required(),

    //             Forms\Components\DatePicker::make('start_date')
    //                 ->label('Tanggal Mulai')
    //                 ->required(),

    //             Forms\Components\DatePicker::make('end_date')
    //                 ->label('Tanggal Selesai')
    //                 ->required()
    //                 ->afterOrEqual('start_date'),

    //             Forms\Components\Textarea::make('description')
    //                 ->label('Deskripsi')
    //                 ->rows(3)
    //                 ->columnSpanFull(),
    //         ]);
    // }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('title')->label('Judul'),
    //             Tables\Columns\TextColumn::make('type')->label('Tipe'),
    //             Tables\Columns\TextColumn::make('start_date')->label('Mulai'),
    //             Tables\Columns\TextColumn::make('end_date')->label('Selesai'),
    //         ])
    //         ->filters([]);
    // }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
