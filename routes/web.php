<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $icons = [
        ['icon' => 'fa-regular fa-user'],
        ['icon' => 'fa-regular fa-user'],
        ['icon' => 'fa-solid fa-table'],
        ['icon' => 'fa-regular fa-user'],
        ['icon' => 'fa-regular fa-user'],
        ['icon' => 'fa-solid fa-tv'],
        ['icon' => 'fa-regular fa-user'],
        ['icon' => 'fa-regular fa-user'],
    ];

    $menu_items = [
        ['item' => 'Traditional Wear'],
        ['item' => 'Westermn wear'],
        ['item' => 'swim'],
        ['item' => 'winter'],
        ['item' => 'Beauty'],
        ['item' => 'Juwelly'],
        ['item' => 'Personal Aplication'],
        ['item' => 'Brands'],
        ['item' => 'Brands'],
        ['item' => 'Brands'],
        ['item' => 'Brands'],
    ];

    return view('home', compact('icons', 'menu_items'));
    // dd($dropdown_items);
    // foreach ($dropdown_items as $key => $dropdown_item)
    // dd($dropdown_item);
});