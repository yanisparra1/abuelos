<?php

namespace App\Filament\Resources\Operacions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OperacionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('detalles')
                  ->columnSpanFull()
                    ->required(),
            ]);
    }
}
