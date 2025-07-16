<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Login;              // لازم تستورد هذا
use App\Listeners\LogUserLogin;                // لازم تستورد هذا أيضاً

class EventServiceProvider extends ServiceProvider
{
    /**
     *   
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    
    protected $listen = [
        Login::class => [
            LogUserLogin::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}
