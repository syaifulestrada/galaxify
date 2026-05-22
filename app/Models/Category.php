<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

#[Fillable(['name', 'type'])]
class Category extends Model
{
    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }

    public function projects(): MorphToMany
    {
        return $this->morphedByMany(Project::class, 'categorizable');
    }

    public function members(): MorphToMany
    {
        return $this->morphedByMany(Member::class, 'categorizable');
    }
}
