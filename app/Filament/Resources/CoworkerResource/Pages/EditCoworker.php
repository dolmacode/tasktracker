<?php

namespace App\Filament\Resources\CoworkerResource\Pages;

use App\Filament\Resources\CoworkerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoworker extends EditRecord
{
    protected static string $resource = CoworkerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
