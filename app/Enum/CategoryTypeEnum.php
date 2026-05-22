<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum CategoryTypeEnum: string implements HasLabel
{
    case POST = 'post';

    case PROJECT = 'project';

    case TECHSTACK = 'tech_stack';

    case ROLE = 'role';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::POST => 'Post',
            self::PROJECT => 'Project',
            self::TECHSTACK => 'Tech Stack',
            self::ROLE => 'Role',
        };
    }
}
