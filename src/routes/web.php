<?php

use Illuminate\Support\Facades\Route;
use XelentAbrar\Packages\Http\Controllers\StaticPageController;

Route::get('pages/{slug}', [StaticPageController::class, 'show']);
