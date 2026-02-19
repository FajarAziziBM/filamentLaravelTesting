<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\User;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(150),

            TextInput::make('email')
                ->email()
                ->unique(User::class, ignoreRecord: true)
                ->maxLength(150)
                ->nullable(),

            // Cara aman untuk password create/edit
            TextInput::make('password')
                ->password()
                ->required(fn($record) => ! $record) // password wajib saat create, optional saat edit
                ->dehydrateStateUsing(fn($state) => $state ? bcrypt($state) : null)
                ->maxLength(255),

            Select::make('roles')
                ->multiple()
                ->relationship('roles', 'name')
                ->label('Roles')
                ->preload(),
        ]);
    }
}
