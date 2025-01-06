<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::post('/', [Controller::class, 'verify']);
