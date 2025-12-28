<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [PageController::class, 'homeView'])->name(name: 'homeView');
Route::get(uri: '/products', action: [PageController::class, 'productsView'])->name(name: 'productsView');
