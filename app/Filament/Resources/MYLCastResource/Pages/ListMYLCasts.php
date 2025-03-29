<?php

namespace App\Filament\Resources\MYLCastResource\Pages;

use App\Filament\Resources\MYLCastResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMYLCasts extends ListRecords
{
    protected static string $resource = MYLCastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
