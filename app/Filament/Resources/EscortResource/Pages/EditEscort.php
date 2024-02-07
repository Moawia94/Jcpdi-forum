<?php

namespace App\Filament\Resources\EscortResource\Pages;

use App\Filament\Resources\EscortResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEscort extends EditRecord
{
    protected static string $resource = EscortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
