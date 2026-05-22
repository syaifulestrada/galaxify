<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
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
                        Select::make('categories')
                            ->relationship('categories', 'name')
                            ->searchable()
                            ->preload()
                            ->multiple()
                            ->required(),
                        FileUpload::make('cover')
                            ->required(),
                        Textarea::make('content')
                            ->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
