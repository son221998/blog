<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostDetailController;
use App\Http\Controllers\UserController;
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

// Frontend Side
Route::GET('/', [HomeController::class, 'homepage'])->name('frontend.home'); // Home Page
//Log In Form
Route::GET('/login', [UserController::class, 'login'])->name('frontend.users.login'); //Register front-end
//Register Create Form
Route::GET('/register', [UserController::class, 'index'])->name('frontend.users.register'); //Register front-end
//Create New User
Route::POST('/register', [UserController::class, 'register'])->name('frontend.register.store'); 


// // Login Form
// Route::GET('/login', [UserController::class, 'create'])->name('frontend.login.login');

// Contact us Frontend
Route::GET('/contact-us', [ContactController::class, 'index'])->name('frontend.contact.index'); // Post Contact front-end
Route::POST('/contact-us', [ContactController::class, 'submit'])->name('frontend.contact.submit'); // Button Contact front-end

// Post Frontend
Route::prefix('post')->group(function () {
    Route::GET('/', [PostController::class, 'home'])->name('post.home'); // Home Page
    Route::GET('/{id}', [PostController::class, 'show'])->name('frontend.posts.detail'); //View Detail // Post Page by ID
    Route::POST('/like/{id}', [PostController::class, 'index'])->name('frontend.post.like'); //Post Like
});

 // Backend Side
Route::prefix('/admin')->group(function () {//->middleware('auth')
    Route::GET('/', [DashboardController::class, 'main'])->name('backend.dashboard.main');
    //Dashboard
    Route::GET('/dashboard', [DashboardController::class, 'main'])->name('backend.dashboard.main'); 

    // Post Backend
    Route::prefix('post')->group(function () {
        Route::GET('/', [PostController::class, 'index'])->name('posts.index'); // View Homepage Done
        Route::GET('/add', [PostController::class, 'create'])->name('posts.create'); // View Add + Add post to category by select //Done
        Route::GET('edit/{id}', [PostController::class, 'edit'])->name('post.edit'); //View Edit //Done
        Route::GET('detail/{id}', [PostController::class, 'view'])->name('post.detail'); // View Post Detail
        Route::POST('save', [PostController::class, 'store'])->name('posts.save'); // Store Image Done
        Route::POST('update', [PostController::class, 'update'])->name('post.update'); // Update Blog //Return View //Done //Done
        Route::GET('delete/{id}', [PostController::class, 'destroy'])->name('post.delete'); // Delete Post //Done
    }); 

    // Category Backend
    Route::prefix('category')->group(function () {
        Route::GET('/', [CategoryController::class, 'index'])->name('category.index'); // Store Image //Done
        Route::GET('/add', [CategoryController::class, 'create'])->name('category.add'); // Category Create //Done
        Route::GET('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit'); // Category Edit //Return View //Done
        Route::GET('detail/{id}', [CategoryController::class, 'show'])->name('category.detail'); // Blog Detail by category //Done
        Route::POST('add-save', [CategoryController::class, 'store'])->name('category.save'); // Save Category store // Done
        Route::POST('edit-save/{id}', [CategoryController::class, 'update'])->name('category.update'); // Edit Category save //Process Save // Done
        Route::GET('delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete'); // Delete Category //Done
    }); 
    // Contact us Backend
    Route::prefix('contact')->group(function () {
        Route::GET('/', [ContactController::class, 'list'])->name('backend.message.index'); // Contact list back-end
        Route::POST('/send', [ContactController::class, 'submit'])->name('message.submit'); // Contact back-end
        Route::GET('detail/{id}', [ContactController::class, 'show'])->name('message.show'); // View Contact Detail
    
    });
    //User Count
    Route::prefix('user')->group(function () {
        Route::GET('/author', [AuthorController::class, 'index'])->name('backend.author.index'); // Contact list back-end
        Route::GET('detail/{id}', [AuthorController::class, 'show'])->name('backend.author.show'); // View User Detail
    });
}); 




    