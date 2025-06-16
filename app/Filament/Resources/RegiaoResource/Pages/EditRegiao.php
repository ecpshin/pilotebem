<?php

namespace App\Filament\Resources\RegiaoResource\Pages;

use App\Filament\Resources\RegiaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegiao extends EditRecord
{
    protected static string $resource = RegiaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
