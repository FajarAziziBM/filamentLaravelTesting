<?php

namespace App\Filament\Resources\Pekerjaans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class PekerjaanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul Pekerjaan')
                ->required()
                ->maxLength(150),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->nullable(),

            Forms\Components\TextInput::make('wage')
                ->label('Upah')
                ->numeric()
                ->required(),

            Forms\Components\DatePicker::make('start_date')
                ->label('Tanggal Mulai')
                ->required(),

            Forms\Components\DatePicker::make('end_date')
                ->label('Tanggal Selesai')
                ->required(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'planned' => 'Planned',
                    'ongoing' => 'Ongoing',
                    'completed' => 'Completed',
                ])
                ->required(),

            Forms\Components\Select::make('created_by')
                ->label('Dibuat Oleh')
                ->relationship('creator', 'name')
                ->required(),

            Forms\Components\Select::make('users')
                ->label('Assigned Users')
                ->multiple()
                ->relationship('users', 'name')
                ->preload(),
        ]);
    }
}
