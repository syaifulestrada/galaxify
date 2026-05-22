<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['user_id', 'title', 'slug', 'cover', 'content'])]
class Post extends Model
{
    protected static function booted(): void
    {
        static::deleted(function (Post $post) {
            if ($post->cover && Storage::disk('public')->exists($post->cover)) {
                Storage::disk('public')->delete($post->cover);
            }
        });
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
