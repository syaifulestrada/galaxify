<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum MemberRoleEnum: string implements HasLabel
{
    case UIUX = 'UI/UX Designer';

    case BackEndEngineer = 'Backend Engineer';

    case FrontEndDev = 'FrontEnd Developer';

    case DigitalMarketing = 'Digital Marketing Specialist';

    case DevOps = 'DevOps Engineer';

    case ProjectManager = 'Project Manager';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::UIUX => 'UI/UX Designer',
            self::BackEndEngineer => 'BackEnd Engineer',
            self::FrontEndDev => 'FrontEnd Developer',
            self::DigitalMarketing => 'Digital Marketing Specialist',
            self::DevOps => 'DevOps Engineer',
            self::ProjectManager => 'Project Manager'
        };
    }
}
