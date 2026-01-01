<?php

namespace App\Filament\Resources\Abuelos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AbueloForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('cedula')
                    ->required(),
                DatePicker::make('fecha_nacimiento')
                    ->required(),

                TextInput::make('sexo')
                    ->required(),
                TextInput::make('direccion')
                    ->required(),
                TextInput::make('telf_fa')
                    ->tel()
                    ->required(),
            ]);
    }
}
