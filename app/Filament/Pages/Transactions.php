<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Transactions extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static string $view = 'filament.pages.transactions';

    public function getTitle(): string
    {
        return ''; // Removes the title
    }
}
