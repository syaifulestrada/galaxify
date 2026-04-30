<?php

namespace App\Filament\Pages;

use App\Enum\NavigationGroup;
use App\Models\AboutUs as ModelsAboutUs;
use BackedEnum;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class AboutUs extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected string $view = 'filament.pages.about-us';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice;

    protected static ?int $navigationSort = 2;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::Website;

    public ?array $data = [];

    public ?bool $isUpdate = false;

    public function mount(): void
    {
        $aboutUs = ModelsAboutUs::first();

        if ($aboutUs) {
            $this->isUpdate = true;
            $this->form->fill($aboutUs->toArray());
        } else {
            $this->form->fill();
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        Textarea::make('about')
                            ->required(),
                        Textarea::make('vision')
                            ->required(),
                        Textarea::make('mission')
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();

        if ($this->isUpdate) {
            ModelsAboutUs::first()->update($data);
        } else {
            ModelsAboutUs::create($data);
            $this->isUpdate = true;
        }

        Notification::make()
            ->title('Success')
            ->success()
            ->send();
    }
}
