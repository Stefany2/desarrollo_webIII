// app/Http/Kernel.php
protected $routeMiddleware = [
    'role' => \App\Http\Middleware\RoleMiddleware::class,
];
// app/Http/Kernel.php
protected $routeMiddleware = [
    // Otros middlewares...
    'role.redirect' => \App\Http\Middleware\RoleRedirect::class,
];
