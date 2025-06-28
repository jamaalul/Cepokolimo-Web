<?php

namespace App\Filament\Resources\APBDResource\Pages;

use App\Filament\Resources\APBDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAPBD extends EditRecord
{
    protected static string $resource = APBDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
