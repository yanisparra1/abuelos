<?php

namespace App\Filament\Resources\Users\Tables;

use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\Action;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                 Action::make('Verificar')
                     ->action(function(User $user) {
                        $user->email_verified_at = now();
                        $user->save();
                     })
                     ->visible(fn (User $user): bool => $user->email_verified_at === null)
                     ->icon('heroicon-o-check-circle')
                     ->color('success'),
                 Action::make('Desverificar')
                     ->action(function(User $user) {
                        $user->email_verified_at = null;
                        $user->save();
                     })
                     ->visible(fn (User $user): bool => $user->email_verified_at !== null)
                     ->icon('heroicon-o-x-circle')
                     ->color('danger'),
            ]);
    }
}
