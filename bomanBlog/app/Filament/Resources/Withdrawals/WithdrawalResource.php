<?php

namespace App\Filament\Resources\Withdrawals;

use App\Filament\Resources\Withdrawals\Pages;
use App\Models\Withdrawal;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Tables;

class WithdrawalResource extends Resource
{
    protected static ?string $model = Withdrawal::class;

    // HARUS STRING / NULL
    // protected static ?string $navigationIcon = 'heroicon-o-cash';

    // protected static ?string $recordTitleAttribute = 'id';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\Select::make('user_id')
    //                 ->label('User')
    //                 ->relationship('user', 'name')
    //                 ->searchable()
    //                 ->required(),

    //             Forms\Components\TextInput::make('amount')
    //                 ->label('Jumlah')
    //                 ->numeric()
    //                 ->required()
    //                 ->prefix('Rp')
    //                 ->inputMode('decimal'),

    //             Forms\Components\DatePicker::make('withdrawal_date')
    //                 ->label('Tanggal Pengambilan')
    //                 ->required(),

    //             Forms\Components\Textarea::make('notes')
    //                 ->label('Catatan')
    //                 ->rows(3)
    //                 ->columnSpanFull(),

    //             Forms\Components\Select::make('created_by')
    //                 ->label('Dibuat Oleh')
    //                 ->relationship('creator', 'name')
    //                 ->searchable()
    //                 ->required(),
    //         ]);
    // }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('user.name')->label('User'),
    //             Tables\Columns\TextColumn::make('amount')->label('Jumlah')->money('IDR', true),
    //             Tables\Columns\TextColumn::make('withdrawal_date')->label('Tanggal'),
    //             Tables\Columns\TextColumn::make('creator.name')->label('Dibuat Oleh'),
    //         ])
    //         ->filters([]);
    // }

    // public static function getRelations(): array
    // {
    //     return [];
    // }

    // public static function getPages(): array
    // {
    //     return [
    //         'index' => Pages\ListWithdrawals::route('/'),
    //         'create' => Pages\CreateWithdrawal::route('/create'),
    //         'edit' => Pages\EditWithdrawal::route('/{record}/edit'),
    //     ];
    // }
}
