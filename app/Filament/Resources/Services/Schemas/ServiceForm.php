<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                        TextInput::make('slug')
                            ->readOnly()
                            ->required(),
                        Select::make('icon')
                            ->label('Icon (Heroicon)')
                            ->searchable()
                            ->options(Heroicon::class)
                            ->columnSpanFull()
                            ->required(),
                        Textarea::make('content')
                            ->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
