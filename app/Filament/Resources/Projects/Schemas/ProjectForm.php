<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Enum\TechStackEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                        TextInput::make('slug')
                            ->readOnly()
                            ->required(),
                        TextInput::make('year')
                            ->numeric()
                            ->maxValue(now()->year)
                            ->nullable(),
                        Select::make('category')
                            ->searchable()
                            ->options([
                                'Web Development' => 'Web Development',
                                'Desktop Development' => 'Desktop Development',
                                'Mobile Development' => 'Mobile Development',
                                'Portfolio' => 'Portfolio',
                                'Embedded System' => 'Embedded System',
                            ])
                            ->nullable(),
                        TextInput::make('client')
                            ->nullable(),
                        TextInput::make('duration')
                            ->nullable(),
                        Select::make('tech_stack')
                            ->options(TechStackEnum::class)
                            ->searchable()
                            ->multiple()
                            ->required(),
                        FileUpload::make('cover')
                            ->required(),
                        Textarea::make('content')
                            ->required(),
                        Toggle::make('active')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }
}
