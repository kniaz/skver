<?php


namespace App\Services;

use App\Menu;

class MainMenuService
{
    public function getMenu()
    {
        return Menu::where('id', '>', 0)->orderBy('order', 'asc')->get();
    }
}