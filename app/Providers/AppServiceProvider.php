<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // definisi macro baru
        Blueprint::macro('withUserAudit', function () {
            $this->string('created_by', 12)->nullable();
            $this->string('modified_by', 12)->nullable();
        });
    }
}
