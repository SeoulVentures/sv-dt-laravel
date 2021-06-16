<?php

use Illuminate\Support\Facades\Route;
use SeoulVentures\SvDataTable\Http\Controllers\DataTableApiController;

Route::get('/svdt/headers', [ DataTableApiController::class, 'headers' ]);
Route::get('/svdt/data', [ DataTableApiController::class, 'read' ]);
