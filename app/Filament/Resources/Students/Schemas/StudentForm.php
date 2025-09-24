<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Define your form components here
                // Example:
                TextInput::make('name')->label('Name')->required(),
                TextInput::make('email')->label('Email')->email()->required()->unique(),
                TextInput::make('phone')->label('Phone'),
                TextInput::make('address')->label('Address'),
            ]);
    }
}
