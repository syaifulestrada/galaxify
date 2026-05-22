<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['title', 'slug', 'year', 'client', 'duration',, 'content', 'cover', 'active'])]
class Project extends Model
{
    protected static function booted(): void
    {
        static::deleted(function (Project $project) {
            if ($project->cover && Storage::disk('public')->exists($project->cover)) {
                Storage::disk('public')->delete($project->cover);
            }
        });
    }
}
