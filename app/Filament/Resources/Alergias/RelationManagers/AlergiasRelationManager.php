<?php

namespace App\Filament\Resources\Alergias\RelationManagers;

use App\Filament\Resources\Alergias\AlergiaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class AlergiasRelationManager extends RelationManager
{
    protected static string $relationship = 'alergias';

    protected static ?string $relatedResource = AlergiaResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
