<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        Select::make('roles')
                            ->relationship('roles', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        FileUpload::make('cover')
                            ->disk('public')
                            ->directory('members-cover')
                            ->required(),
                        Textarea::make('description')
                            ->required(),
                        Toggle::make('active')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }
}
