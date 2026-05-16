<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['name', 'cover', 'description', 'role'])]
class Member extends Model
{
    protected function casts(): array
    {
        return [
            'role' => 'array',
        ];
    }

    protected static function booted(): void
    {
        static::deleted(function (Member $member) {
            if ($member->cover && Storage::disk('public')->exists($member->cover)) {
                Storage::disk('public')->delete($member->cover);
            }
        });
    }
}
