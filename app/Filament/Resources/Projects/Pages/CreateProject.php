<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $cover = storage_path('app/public/'.$data['cover']);

        $image = ImageManager::usingDriver(Driver::class)->decode($cover);
        $encoded = $image->encodeUsingFormat(Format::WEBP);

        $newPath = 'projects/'.pathinfo($data['cover'], PATHINFO_FILENAME).'.webp';
        Storage::disk('public')->put($newPath, $encoded);

        Storage::disk('public')->delete($data['cover']);

        $data['cover'] = $newPath;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
