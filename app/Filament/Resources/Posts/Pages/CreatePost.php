<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();

        $cover = storage_path('app/public/'.$data['cover']);

        $image = ImageManager::usingDriver(Driver::class)->decode($cover)->encodeUsingFormat(Format::WEBP);

        $newPath = 'posts-cover/'.pathinfo($data['cover'], PATHINFO_FILENAME).'.webp';
        Storage::disk('public')->put($newPath, $image);

        Storage::disk('public')->delete($data['cover']);

        $data['cover'] = $newPath;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
