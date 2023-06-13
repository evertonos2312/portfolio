<?php

namespace App\Filament\Resources\LanguageResource\Pages;

use App\Filament\Resources\LanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLanguage extends CreateRecord
{
    protected static string $resource = LanguageResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['profile_id'] = auth()->id();

        return $data;
    }
}
