<?php

namespace App\Filament\Resources\Jobs\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class JobForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->label('Nama Pekerjaan')
                    ->required()
                    ->maxLength(150),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('wage')
                    ->label('Upah')
                    ->numeric()
                    ->required()
                    ->prefix('Rp')
                    ->inputMode('decimal'),

                Forms\Components\DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required(),

                Forms\Components\DatePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->required()
                    ->afterOrEqual('start_date'),

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
                    ->searchable()
                    ->required(),
            ])
            ->columns(2);
    }
}
