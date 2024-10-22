<?php

use App\Http\Controllers\BillingProviderController;
use Illuminate\Support\Facades\Route;

Route::resource('providers', BillingProviderController::class);
