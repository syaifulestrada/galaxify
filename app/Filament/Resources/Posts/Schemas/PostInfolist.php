<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Details')
                    ->columnSpanFull()
                    ->columns(2)
                    ->collapsible()
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('User'),
                        TextEntry::make('title'),
                        TextEntry::make('slug')
                            ->columnSpanFull(),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),
                    ]),
                Section::make('Cover Image')
                    ->columnSpanFull()
                    ->collapsible()
                    ->schema([
                        ImageEntry::make('cover')
                            ->hiddenLabel(),
                    ]),
                Section::make('Content')
                    ->columnSpanFull()
                    ->collapsible()
                    ->schema([
                        TextEntry::make('content')
                            ->hiddenLabel(),
                    ]),
            ]);
    }
}
