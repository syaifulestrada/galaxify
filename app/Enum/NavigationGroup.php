<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum NavigationGroup implements HasLabel
{
    case UserManagement;

    case ContentManagement;

    public function getLabel(): string
    {
        return match ($this) {
            self::UserManagement => __('User Management'),
            self::ContentManagement => __('Content Management'),
        };
    }
}
