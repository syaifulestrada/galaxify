<?php

namespace App\Filament\Resources\Members\Pages;

use App\Filament\Resources\Members\MemberResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $cover = storage_path('app/public/'.$data['cover']);
        $image = ImageManager::usingDriver(Driver::class)->decode($cover);
        $encoded = $image->encodeUsingFormat(Format::WEBP);

        $newPath = 'members-cover/'.pathinfo($data['cover'], PATHINFO_FILENAME).'.webp';
        Storage::disk('public')->put($newPath, $encoded);

        Storage::disk('public')->delete($data['cover']);

        $data['cover'] = $newPath;

        return $data;
    }
}
