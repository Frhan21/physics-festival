<?php

use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title'=>'PF | Home',
        'events'=>Event::all()
    ]);
});

Route::get('/home',function(){
    return view('home',[
        'title'=> 'PF | Home',
        'events'=>Event::all()
    ]);
});

Route::get('/events-layout',function(){
    return view('events-layout.index',[
        'events'=>Event::all()
        ]
    );
});


// Route Kita Untuk Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// Route Register
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->name('register-store');

// Route Dashboard OTW
Route::get('/dashboard',function(){
    return view('dashboard.index',[
        'title'=>'PF | Dashboard',
        'users'=>User::all()
    ]);

});
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/create',[DashboardController::class,'create'])->name('show')->middleware('auth');
Route::post('/dashboard/create',[DashboardController::class,'store'])->name('create')->middleware('auth');
Route::get('/dashboard/events',function(){
    return view('dashboard.card-events',[
        'events'=>Event::all(),
        'title'=>'Events'
    ]);
})->name('events');

// Route Admins
Route::get('/admins',[AdminController::class,'index'])->name('admin')->middleware('auth');
Route::get('/admins/user',[AdminController::class,'users'])->name('users');
Route::get('/admins/post',[AdminController::class,'post_index'])->name('post');
Route::get('/admins/post/create',[AdminController::class,'post_create'])->name('admin-create');
Route::post('/admins/post/create',[AdminController::class,'post_store'])->name('admin-store');

Route::post('/admins/post/{id}',[AdminController::class,'destroy'])->name('del_post');

Route::get('/admins/post/checkSlug',[AdminController::class,'checkSlug'] );


// Cetak PDF

// Route::post('/admins/cetak_pdf',[AdminController::class,'cetak_pdf'])->name('cetak');

Route::get('/dashboard/posts',[PostController::class,'index'])->name('posts');
Route::get('/dashboard/post/{post:slug}',[PostController::class,'show'])->name('post-show');




