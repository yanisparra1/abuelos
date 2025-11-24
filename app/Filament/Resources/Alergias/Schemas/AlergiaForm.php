<?php

namespace App\Filament\Resources\Alergias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AlergiaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
            ]);
    }
}
