<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $oldCover = $this->record->cover;
        $newCover = $data['cover'];

        if ($oldCover === $newCover) {
            return $data;
        }

        if ($oldCover && Storage::disk('public')->exists($oldCover)) {
            Storage::disk('public')->delete($oldCover);
        }

        $cover = storage_path('app/public/'.$newCover);

        $image = ImageManager::usingDriver(Driver::class)->decode($cover)->scaleDown(600);

        $encoded = $image->encodeUsingFormat(Format::WEBP);

        $newPath = 'projects/'.pathinfo($newCover, PATHINFO_FILENAME).'.webp';

        Storage::disk('public')->put($newPath, $encoded);

        Storage::disk('public')->delete($newCover);

        $data['cover'] = $newPath;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
