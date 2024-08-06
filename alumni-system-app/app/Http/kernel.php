<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Spatie\Permission\Middlewares\RoleMiddleware;

class Kernel extends HttpKernel
{

    protected $routeMiddleware = [
        // Other middleware
        'role' => \App\Http\Middleware\RoleMiddleware::class,
        'admin.access' => \App\Http\Middleware\AdminAccess::class,
    ];
}
