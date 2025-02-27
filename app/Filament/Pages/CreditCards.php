<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CreditCards extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static string $view = 'filament.pages.credit-cards';
    // public function getTitle(): string
    // {
    //     return ''; // Removes the title
    // }
}
