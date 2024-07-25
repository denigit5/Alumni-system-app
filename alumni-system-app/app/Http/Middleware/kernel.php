<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Spatie\Permission\Middlewares\RoleMiddleware;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Your global middleware here
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\VerifyCsrfToken::class,
            \App\Http\Middleware\RedirectIfAuthenticated::class,
        ],

        'api' => [
            // Your API middleware group here
        ],
    ];

    protected $routeMiddleware = [
        // Other middleware
        'role' => \App\Http\Middleware\RoleMiddleware::class,
        'admin' => \App\Http\Middleware\RedirectIfNotAdmin::class,
    ];
}
