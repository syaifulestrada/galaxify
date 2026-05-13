<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'cover', 'description', 'role'])]
class Member extends Model
{
    protected function casts(): array
    {
        return [
            'role' => 'array',
        ];
    }
}
