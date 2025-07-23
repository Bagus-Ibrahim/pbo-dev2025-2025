<?php

namespace App\Filament\Admin\Resources\TreatmentResource\Pages;

use App\Filament\Admin\Resources\TreatmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTreatments extends ListRecords
{
    protected static string $resource = TreatmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
//list