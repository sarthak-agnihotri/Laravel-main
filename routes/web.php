<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvenOddController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FileController;

Route::get('/d', function () {
    return "Welcome to the dashboard!";
})->middleware('auth');
/*Route::get('/', function () {
    return view('welcome');
});*/
// Route::get('/',function(){
//     return view('home');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/service',function(){
//     return view('service');
// });
// Route::get('/users/{id}',function($id){
//     return 'User id:'.$id;
// });
/*Route::get('/calc/{operands}/{num1}/{num2}',function($operands,$num1,$num2){
    switch($operands){
        case 'add':
            return $num1+$num2;
        case 'diff':
            return $num1-$num2;
        case 'multiply':
            return $num1*$num2;
        case 'divide':
            return $num1/$num2;
        default:
            return"Invalid operation";
    }
});*/
// Route::get('/products',[ProductController::class,'index']);

/*Route::get('/student/{name}',function(){
    return view('student',['name'=>$name]);
});
Route::get('/course/{course?}',function($course="No course selected"){
    return view('course',['course'=>$course]);
});*/
/*Route::get('/student/{name}',[StudentController::class,'student']);*/
/*Route::get('/course/{course?}',[CourseController::class,'course']);//dynamic*/
/*Route::get('/students',function(){
    $students=[
        ['id'=>1,'name'=>'David'],
        ['id'=>2,'name'=>'Bob'],
        ['id'=>3,'name'=>'John']
    ];
    return view('students', compact('students'));
});*/

/*Route::get('/new-dashboard', function () {
    return view('dashboard');
})->name('AB');

Route::get('/login/{email}/{password}', function ($email, $password) {

    if ($email === 'example@gmail.com' && $password === 'abc') {
        return redirect()->route('AB')
            ->with('email', $email)
            ->with('success', 'Login Successfully');
    } else {
        return redirect('/error');
    }

});

Route::get('/error', function () {
    return view('error');
});*/

/* Route::get('/dashboard', function () {
     return view('dashboard');
 });

 Route::get('/error', function () {
     return view('error');
 });*/

/*Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return 'Admin Dashboard';
    });
    Route::get('/profile',function(){
        return 'Admin Profile';
    });
});*/

/*Route::get('/dashboard', function () {
    return "Hello World";
});*/

/*Route::get('/dashboard', function () {
    return response()
        ->json([
            'id' => 1,
            'name' => 'ABC'
        ]);
        // ->header('Content-Type', 'text/plain'); // chain header after json()
        
});*/
/*Route::get('/set_cookie', function () {
    // Set a cookie named 'user' with value 'ABC', expires in 60 minutes
    return response('Cookie has been set!')
        ->cookie('user', 'ABC', 60);
});*/
/*Route::get('/read_cookie',function(Request $request){
    $name=$request->cookie('name');
    return 'Cookie Value: '.$name;
});*/
/*Route::get('/read_cookie',function(Request $request){
    $name=Cookie::get('name');
    return 'Cookie Value: '.$name;
});*/

Route::get('/set-cookie',function(){
    return response("Cookie has been set!")
    ->cookie('course','laravel',60);
});
Route::get('/read-cookie',function(Request $request){
    $check=$request->cookie('course');
    if($check){
        return 'Cookie Value: '.$check;
    }else{
        return 'Cookie not found';
    }
});

//json data
Route::get('/user',function(){
    return response()->json([
        ['id'=>1,'name'=>'ABC','course'=>'laravel'],
        ['id'=>2,'name'=>'XYZ','course'=>'react']
    ]);
});
//input json data on url using http://127.0.0.1:8000/users?name=abhay&course=laravel
Route::get('/users',function(Request $request){
    $name=$request->name;
    $course=$request->course;
    return "Name: ".$name ."Course: ".$course;
});
//redirect to controller action
Route::get('/us',[UserController::class,'index'])->name('user.index');
Route::get('/ch',function(){
    return redirect()->route('user.index');
});
//Redirect with parameters
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/redirect', function () {
    return redirect()->route('user.show', ['id' => 123]);
});

// Route::get('/dashboard',[UserController::class,'dashboard'])->name('user.check');
// Route::get('/redirect-dashboard',function(){
//     return redirect()->route('user.check');
// });

/*Route::get('/vote/{age}',[UserController::class,'checkAge']);
Route::get('/user',function(){
    return view('user',[
        'name'=>'Abhay',
        'course'=>'Laravel'
    ]);
});

Route::get('/numbers',function(){
    return view('numbers');
});

Route::get('/users',function(){
    $users=[
        ['id'=>1,'name'=>'Abhay'],
        ['id'=>2,'name'=>'John'],
        ['id'=>3,'name'=>'David']
    ];
    return view('user',compact('users'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login/{email}/{password}', function ($email, $password) {

    if ($email === 'abc@gmail.com' && $password === 'ABC') {

        return redirect()->route('dashboard')
            ->with('email', $email)
            ->with('success', 'Login Successfully');

    }

    return redirect('/error');

});*/
/*Route::get('/student',function(){
    return redirect()->action([StudentController::class,'student']);
});*/

/*Route::get('new-url/{name}',[StudentController::class,'student']);
Route::get('/login',function(){
    return redirect()->action([StudentController::class,'student'],['name' => 'Intel']);
});*/

Route::get('/home',function(){
    return "Welcome to the home page!";
})->middleware('check.course');

// Route::get('new-url/{name}', [StudentController::class, 'student']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('AB');

// Route::get('/login/{email}/{pass}', function ($email, $pass) {
//     if ($email === 'abc@gmail.com' && $pass === 'ABC') {
//         return redirect()
//             ->route('AB')
//             ->with('email', $email)
//             ->with('pass', $pass);
//     } else {
//         return "Invalid credentials";
//     }
// });

// Route::resource('posts', PostController::class);

// Route::get('/books',[BookController::class,'index']);
// Route::get('/books/{id}',[BookController::class,'show']);

// Route::get('/student',[StudentController::class,'students'])
// ->middleware('check.user');;

// Route::get('/test',[StudentController::class,'students']);
// Route::get('/test2',function(){
//     return 'This is my normal route';
// });
//Route::get('/test1',[StudentController::class,'profile'])->middleware('check.course');
// Route::get('/test1',[StudentController::class,'profile']);

// Route::get('/layout',function(){
//     return view('home');
// });

//Route::get('/details',[StudentController::class,'details']);

// Route::get('/dashboard',function(){
//     return view('dashboard');
//     //return url()->current();
//     return url()->previous();
// });
// Route::get('/home',function(){
//     return view('home');
// })->name('H');
// Route::get('/about',function(){
//     return view('about');
// })->name('A');
// Route::get('/service',function(){
//     return view('service');
// })->name('S');



/*Route::get('/secure',function(){
if(request()->secure()){
return "This is a secure route";
}else{
    return "This is not a secure route";}
}) */

Route::domain('admin.mysite.com')->group(function(){
    Route::get('/',function(){
        return "Admin Pannel";
    });
    Route::get('/dashboard',function(){
        return "Admin Dashboard";
    });
});
require __DIR__.'/auth.php';

//Route parameter constraints
Route::get('/user/{id}/{name}',function($id, $name){
    return "User id: ".$id.", Name: ".$name;
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

//controller grouping
Route::controller(StudentController::class)->middleware('auth')->group(function(){
    Route::get('/students','students');
    Route::get('/profile','profile');
    Route::get('/details','details');
});

Route::get('/dashboard',function(){
    return[
        'current'=> url()->current(),
        'full'=> url()->full(),
        'path'=>request()->path(),
        'current-url'=>request()->url(),
        'full-url'=>request()->fullUrl(),
        'previous-url'=>url()->previous(),
        'url'=>url('/home',['id'=>5])
    ];
});

//evenodd
Route::get('/evenodd/{number}',[EvenOddController::class,'checkNumber']);
//cookie set
Route::get('/setcookie',function(){
    return response("Cookie has been set!")
    ->cookie('course','laravel',60);
});
//cookie read
Route::get('/readcookie',function(Request $request){
    return $request->cookie('course');
});
//redirect from oldpage to new page
Route::get('/oldpage',function(){
    return redirect('/newpage');
});
Route::get('/newpage',function(){
    return "<h1>This is the new page</h1>";
});
//Redirect named route
Route::get('/dash',function(){
    return "<h1>Welcome to the dashboard</h1>";
})->name('dashboard');
Route::get('/redirect',function(){
    return redirect()->route('dashboard');
});
//redirect to a controller
Route::get('/redirect-controller',function(){
    return redirect()->action([UserController::class,'index']);
});
//Blade
Route::get('/home',function(){
    return view('home');//check blade file in resources/views/home.blade.php
});
//url generations
Route::get('/current-url',function(){
    return view('current-url');
});
//Group routes under prefix /admin.
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::get('/profile',function(){
        return view('admin.profile');
    });
});
//Create middleware that allows only access if ?role=admin in URL.
Route::get('/ad',function(){
    return "Welcome Admin";
})->middleware('check.admin');
//Create middleware that checks for email and password in query parameters and allows access if they match predefined values.
Route::get('/secure',function(){
    return "You have access to the secure route!";
})->middleware('check.user.credentials');
//Create a domain specific route group for admin.localhost that includes routes for dashboard and profile.
Route::domain('admin.localhost')->group(function(){
    Route::get('/dashb',function(){
        return view('dashb');
    });
    Route::get('/pr',function(){
        return view('pr');
    });
});
//Create resource controller for Product (only index and show methods).
Route::resource('products',ProductController::class)->only(['index','show']);
//Create 3 pages (Home, About, Contact) and navigate using links.
Route::get('/h',function(){
    return view('hom');
});
Route::get('/ab',function(){
    return view('about');
});
Route::get('/cont',function(){
    return view('contact');
});
/*Create a small application:
/pages → list products
/pages/{id} → product details
Use controller
Use Blade layout
Use named routes
Use route group /shop
Display current URL
Add middleware check (?access=yes)*/
Route::prefix('shop')->middleware('check.access')->group(function(){
    Route::get('/pages',[PageController::class,'index'])->name('shop.pages');
    Route::get('/pages/{id}',[PageController::class,'show'])->name('shop.pages.show');
});
//Template inheritance
Route::get('/template',function(){
    return view('template');
});
//Single action controller
Route::get('/single-action',HomeController::class);
//secure route
Route::get('/security',function(){
if(request()->query('access') !== 'yes'){
    return redirect('/no-access')->with('error','Access denied');
}else{
    return redirect('/true')->with('success','Access granted');
}
});
Route::get('/no-access',function(){
    return view('no-access');
});
Route::get('/true',function(){
    return view('security');
});


//create a route and dispaly a message based on the language stored in the cookie
//create a method to retrieve the preferred_language cookie and show a message like: If the language is en, display:"Welcome"
//Expected output
//If the preferred_language cookie is set to fr, display: "Binevenue"
//If no cookie is set the page should prompt: Please set your preferred language.
/*Route::get('/set-language/{lang}', function ($lang) {
    return redirect('/language')
        ->withCookie(cookie('preferred_language', $lang, 60));
});

Route::get('/language', function (Request $request) {

    $lang = $request->cookie('preferred_language');

    if ($lang == 'en') {
        $message = "Welcome";
    } elseif ($lang == 'fr') {
        $message = "Bienvenue";
    } else {
        $message = "Please set your preferred language.";
    }

    return view('language', compact('message'));
});*/

//form
Route::get('/dashboard',function(Request $request){
    return response([
        'all'=>$request->all(),
        'name'=>$request->name,
        'age'=>$request->input('age'),
        'age-course'=>$request->only(['age','course']),
        'except'=>$request->except('age'),
        'has'=>$request->has('name')?'Name is present':'Name is not present',
        'input'=>$request->input('age',13),
        'filled'=>$request->filled('name'),
        'isMethod'=>$request->isMethod('post')?'This is a POST request':'This is not a POST request',
        'url'=>$request->url(),
        'fullUrl'=>$request->fullUrl(),
        'path'=>$request->path(),
        'headers'=>$request->header('Authorization'),
    ]);
});

Route::get('/get-form',[FormController::class,'showForm']);
Route::post('/submit-form',[FormController::class,'handleForm']);

//File uploading
Route::get('/upload-file',[FileController::class,'showForm']);
Route::post('/upload-file',[FileController::class,'handleFileUpload']);