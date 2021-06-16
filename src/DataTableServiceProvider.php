<?php

namespace SeoulVentures\SvDataTable;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DataTableServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        Route::middleware('api')->prefix('api')->group(function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }
}
