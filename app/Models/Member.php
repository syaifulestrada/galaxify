<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['name', 'cover', 'description'])]
class Member extends Model
{
    protected static function booted(): void
    {
        static::deleted(function (Member $member) {
            if ($member->cover && Storage::disk('public')->exists($member->cover)) {
                Storage::disk('public')->delete($member->cover);
            }
        });
    }

    public function roles()
    {
        return $this->morphToMany(Category::class, 'categorizable')
            ->where('type', 'role');
    }
}
