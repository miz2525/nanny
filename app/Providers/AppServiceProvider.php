<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cashier\User;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{

    public const ERROR_MESSAGE = 'Something went wrong, Please try again in some time.';
    public const SUCCESS_MESSAGE = 'added successfully.';
    public const UPDATED_SUCCESS_MESSAGE = 'updated successfully.';

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
        Cashier::useCustomerModel(User::class);
        // Loading cache data from database
        // StoreCountriesCache();
        // StoreCitiesCache();
        // StoreLanguagesCache();
    }
}
