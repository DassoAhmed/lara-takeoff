<?php

namespace App\Filament\Resources\CustomerResource\Pages;


use App\Filament\Resources\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Widgets\Widget;


class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         CustomerOverview::class
    //     ];

    // }
}
