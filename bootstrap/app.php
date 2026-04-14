<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->alias([
        //     'check.user'=>\App\Http\Middleware\CheckUser::class,
        // ]);
        //$middleware->append(\App\Http\Middleware\checkCourse::class);//append all the request
        // $middleware->alias([
        //     'check.course'=>\App\Http\Middleware\checkCourse::class,
        // ]);
        // $middleware->alias([
        //     'check.admin'=>\App\Http\Middleware\CheckAdminRole::class,
        // ]);
        // $middleware->alias([
        //     'check.user.credentials'=>\App\Http\Middleware\CheckUserCredentials::class,
        // ]);
        $middleware->alias([
            'check.access'=>\App\Http\Middleware\checkAccess::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
