<?php

namespace App\Providers;

use App\Models\{
    Category,
    Client,
    Plan,
    Product,
    Table,
    Tenant
};
use App\Observers\{
    CategoryObservers,
    ClientObserver,
    PlanObserver,
    ProductObserver,
    TableObserver,
    TenantObservers
};
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Plan::observe(PlanObserver::class);
        Tenant::observe(TenantObservers::class);
        Category::observe(CategoryObservers::class);
        Product::observe(ProductObserver::class);
        Client::observe(ClientObserver::class);
        Table::observe(TableObserver::class);

        /**
         * Custom IF Statements
         */

         Blade::if('admin', function (){
             $user = auth()->user();

             return $user->isAdmin();

         });
    }
}
