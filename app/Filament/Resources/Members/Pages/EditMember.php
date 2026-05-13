<?php

namespace App\Filament\Resources\Members\Pages;

use App\Filament\Resources\Members\MemberResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
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

        $image = ImageManager::usingDriver(Driver::class)->decode($cover);
        $encoded = $image->encodeUsingFormat(Format::WEBP);

        $newPath = 'members-cover/'.pathinfo($newCover, PATHINFO_FILENAME).'.webp';
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
