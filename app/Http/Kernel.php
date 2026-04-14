protected $routeMiddleware=[
    'check.user'=>\App\Http\Middleware\CheckUser::class,
];

'check.course'=>\App\Http\Middleware\checkCourse::class,
'check.admin'=>\App\Http\Middleware\CheckAdminRole::class,
'check.user.credentials'=>\App\Http\Middleware\CheckUserCredentials::class,
'check.access'=>\App\Http\Middleware\checkAccess::class,