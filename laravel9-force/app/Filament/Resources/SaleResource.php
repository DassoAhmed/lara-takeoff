<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaleResource\Pages;
use App\Filament\Resources\SaleResource\RelationManagers;
use App\Models\Sale;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SaleResource extends Resource
{
    protected static ?string $model = Sale::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->limit(12),
                Tables\Columns\TextColumn::make('country')->sortable()->searchable()->limit(12),
                Tables\Columns\TextColumn::make('city')->sortable()->searchable()->limit(12),
                Tables\Columns\TextColumn::make('price')->sortable()->money()->limit(12),
                Tables\Columns\TextColumn::make('sqm'),
                Tables\Columns\TextColumn::make('bedrooms'),
                Tables\Columns\TextColumn::make('bathrooms'),
                Tables\Columns\TextColumn::make('garages'),
                Tables\Columns\IconColumn::make('slider')
                    ->boolean(),
                // Tables\Columns\IconColumn::make('visible')
                //     ->boolean(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListSales::route('/'),
            'create' => Pages\CreateSale::route('/create'),
            'edit' => Pages\EditSale::route('/{record}/edit'),
        ];
    }
}
