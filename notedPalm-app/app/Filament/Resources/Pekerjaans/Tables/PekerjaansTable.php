<?php

namespace App\Filament\Resources\Pekerjaans\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;

class PekerjaansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->searchable(),
                TextColumn::make('status')->sortable(),
                TextColumn::make('wage')->money('IDR', true),
                TextColumn::make('start_date')->date(),
                TextColumn::make('end_date')->date(),
                TextColumn::make('creator.name')->label('Dibuat Oleh'),
                TextColumn::make('users.name')
                    ->label('Assigned Users')
                    ->listWithLineBreaks()
                    ->bulleted(),
            ])
            ->filters([
                //
            ])
            // ->recordActions([
            //     EditAction::make(),
            // ])
            // ->bulkActions([
            //     DeleteBulkAction::make(),
            // ]);
        ;
    }
}
