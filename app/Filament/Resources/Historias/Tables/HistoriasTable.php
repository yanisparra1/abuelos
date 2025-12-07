<?php

namespace App\Filament\Resources\Historias\Tables;

use App\Models\Abuelo;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;

class HistoriasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('abuelo.nombre')
                    ->label('Nombre')
                    ->sortable(),
                TextColumn::make('abuelo.apellido')
                    ->label('Apellido')
                    ->sortable(),
                TextColumn::make('abuelo.cedula')
                    ->label('Cédula de Identidad')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('hist_Med')
                    ->label('Nro. Historia')
                    ->searchable()
                    ->sortable(),
            ])
            ->actions([
                ViewAction::make()->iconButton(),
                EditAction::make()->iconButton(),
                action::make('Seguro')
                ->color('success')
            //    ->url(fn ($record) => 'https://ejemplo.com/ruta/' . $record->id)
                ->icon('heroicon-s-cloud-arrow-down')
                ->url(
                    fn ($record) => route('createPDF', ['historia' => $record]), // Pasar el ID del registro
                    shouldOpenInNewTab: true
                ), 
            ])
         
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
