<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'slug', 'year', 'category', 'client', 'duration', 'tech_stack', 'content', 'cover', 'active'])]
class Project extends Model
{
    protected function casts(): array
    {
        return [
            'tech_stack' => 'array',
        ];
    }
}
