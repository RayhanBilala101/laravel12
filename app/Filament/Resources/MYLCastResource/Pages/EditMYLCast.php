<?php

namespace App\Filament\Resources\MYLCastResource\Pages;

use App\Filament\Resources\MYLCastResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMYLCast extends EditRecord
{
    protected static string $resource = MYLCastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
