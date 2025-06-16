<?php

namespace App\Filament\Resources\RegiaoResource\Pages;

use App\Filament\Resources\RegiaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegiaos extends ListRecords
{
    protected static string $resource = RegiaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
