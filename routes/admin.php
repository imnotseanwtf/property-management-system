<?php

use App\Enums\UserType;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:' . UserType::Admin->value)->group(function () {
    Route::resources(
        [
            'tenant' => TenantController::class,
        ],
        [
            'except' => ['create', 'edit']
        ]
    );
});
