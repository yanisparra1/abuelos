<?php

namespace App\Filament\Resources\Historias\Tables;

use App\Models\Abuelo;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

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
      
            ->recordActions([
                ViewAction::make()->iconButton(),
                EditAction::make()->iconButton(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
