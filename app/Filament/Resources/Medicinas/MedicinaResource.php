<?php

namespace App\Filament\Resources\Medicinas;

use App\Filament\Resources\Medicinas\Pages\CreateMedicina;
use App\Filament\Resources\Medicinas\Pages\EditMedicina;
use App\Filament\Resources\Medicinas\Pages\ListMedicinas;
use App\Filament\Resources\Medicinas\Schemas\MedicinaForm;
use App\Filament\Resources\Medicinas\Tables\MedicinasTable;
use App\Models\Medicina;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MedicinaResource extends Resource
{
    protected static ?string $model = Medicina::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHeart;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return MedicinaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MedicinasTable::configure($table);
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
            'index' => ListMedicinas::route('/'),
            'create' => CreateMedicina::route('/create'),
            'edit' => EditMedicina::route('/{record}/edit'),
        ];
    }
}
