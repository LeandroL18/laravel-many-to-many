<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;

Route::get('/', [ProjectController :: class, 'index']) -> name('index');

Route::get('/types', [TypeController :: class, 'index']) -> name('type.index');