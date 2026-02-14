<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoanResource\Pages;
use App\Models\Loan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LoanResource extends Resource
{
    protected static ?string $model = Loan::class;

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
    //                 ->label('Jumlah Kasbon')
    //                 ->numeric()
    //                 ->required()
    //                 ->prefix('Rp')
    //                 ->inputMode('decimal'),

    //             Forms\Components\DatePicker::make('loan_date')
    //                 ->label('Tanggal Kasbon')
    //                 ->required(),

    //             Forms\Components\Select::make('status')
    //                 ->label('Status')
    //                 ->options([
    //                     'active' => 'Active',
    //                     'paid' => 'Paid',
    //                 ])
    //                 ->required(),

    //             Forms\Components\Textarea::make('notes')
    //                 ->label('Catatan')
    //                 ->rows(3)
    //                 ->columnSpanFull(),
    //         ]);
    // }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('user.name')->label('User'),
    //             Tables\Columns\TextColumn::make('amount')->label('Jumlah')->money('IDR', true),
    //             Tables\Columns\TextColumn::make('loan_date')->label('Tanggal'),
    //             Tables\Columns\TextColumn::make('status')->label('Status'),
    //         ])
    //         ->filters([]);
    // }

    public static function getRelations(): array
    {
        return [];
    }

    // public static function getPages(): array
    // {
    //     return [
    //         'index' => Pages\ListLoans::route('/'),
    //         'create' => Pages\CreateLoan::route('/create'),
    //         'edit' => Pages\EditLoan::route('/{record}/edit'),
    //     ];
    // }
}
