<?php

use Illuminate\Support\Facades\Route;
use xelentabrar\Packages\Http\Controllers\StaticPageController;

Route::get('pages/{slug}', [StaticPageController::class, 'show']);
