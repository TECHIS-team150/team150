<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Illuminate\Routing\UrlGenerator;

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
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        Paginator::useBootstrap();
           // $this->registerPolicies();

        // 管理者に許可
        Gate::define('admin', function ($user) {
            return $user->isAdmin;
          });

          //HTTPS化
          if (\App::environment(['production']) || \App::environment(['develop'])) {
            \URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS','on');
        }
        $url->forceScheme('https');
    }
}