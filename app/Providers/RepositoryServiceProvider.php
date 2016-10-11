<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('App\Repositories\User\UserInterface', 'App\Repositories\User\UserRepository');
       $this->app->bind('App\Repositories\Role\RoleInterface', 'App\Repositories\Role\RoleRepository');
       $this->app->bind('App\Repositories\Page\PageInterface', 'App\Repositories\Page\PageRepository');
    }
}