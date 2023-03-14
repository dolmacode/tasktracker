<?php

namespace App\Filament\Resources\CoworkerResource\Pages;

use App\Filament\Resources\CoworkerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoworkers extends ListRecords
{
    protected static string $resource = CoworkerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
