<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum TechStackEnum: string implements HasLabel
{
    case Laravel = 'Laravel';

    case NodeJS = 'Node.js';

    case ReactJS = 'React.js';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Laravel => 'Laravel',
            self::NodeJS => 'Node.js',
            self::ReactJS => 'React.js',
        };
    }
}
