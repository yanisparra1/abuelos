<?php

namespace App\Filament\Resources\Alergias;

use App\Filament\Resources\Alergias\Pages\CreateAlergia;
use App\Filament\Resources\Alergias\Pages\EditAlergia;
use App\Filament\Resources\Alergias\Pages\ListAlergias;
use App\Filament\Resources\Alergias\Schemas\AlergiaForm;
use App\Filament\Resources\Alergias\Tables\AlergiasTable;
use App\Models\Alergia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AlergiaResource extends Resource
{
    protected static ?string $model = Alergia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSun;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return AlergiaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AlergiasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAlergias::route('/'),
            'create' => CreateAlergia::route('/create'),
            'edit' => EditAlergia::route('/{record}/edit'),
        ];
    }
}
