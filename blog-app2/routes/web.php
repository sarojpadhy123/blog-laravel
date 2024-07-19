<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Blog Page

// Route::get('/blog', function () {
//     return view('blog');
// });


//single page
// Route::get('/single', function () {
//     return view('singleblog');
// });

//About Page
// Route::get('/about', function () {
//     return view('about');
// });

// Contact Page
// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/about', function () {
//     return view('about');
// });








// Using Controller Routing (Best Practices) but we redirect the user to the dashboard page
Route::get('/home', [HomeController::class,'welcome']);
//blog page redirect Dynamic Page
//Having features load all the bloggs from the backend and the content  with it 
Route::get('/blog',[BlogController::class,'index']);



// single page  Dynamic Page
// It will redirect to the single page having features to view the details of the particular    
 Route::get('/blog/singleblog',[BlogController::class,'showsingleblog']);



// contactpage Dynamic Page
// This page uses the email notification it have the business llogic

//  Route::get('/contact',[BlogController::class,'contact']);
 Route::get('/contact',[ContactController::class,'index']);
 // Named Route But Not Required for Now 
//  Route::get('/contact',[ContactController::class,'index'])->name('contact.index');



 //About page Static page
 Route::get('/about',[BlogController::class,'about']);

 //Dashboard Pages 
 //Route to Create a Blog Post Page
 Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
 // Route to Create a Blog Categories Page
 Route::get('/blog/categories',[BlogController::class,'categories'])->name('blog.categories');
  // Route to Create a Blog Category List
 Route::get('/blog/categorylist',[BlogController::class,'categorylist'])->name('blog.categorylist');


// Store Blog Post To the Database
Route::post('/blog',[BlogController::class,'store'])->name('blog.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
