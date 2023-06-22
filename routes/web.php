<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SlideController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/change-lang', [LangController::class, 'changeLang']);

Route::get('/posts/{id}', [PostController::class, 'front_show'])->name('posts.show.front');   
Route::get('/posts', [PostController::class, 'front_index'])->name('posts.index.front');   
Route::get('/order', [PageController::class, 'zakaz'])->name('order.form');

Route::post('/create-order', [OrderController::class, 'store'])->name('createOrder');




/* ========== ADMIN ROUTES ============== */
Route::group(['prefix' => 'adminka', 'middleware' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/order-single/{id}', [OrderController::class, 'show'])->name('order.single');
    Route::resource('/posts', PostController::class);
    Route::resource('/slides', SlideController::class);
    Route::get('/achievements', [PageController::class, 'achievements'])->name('achievements');
    Route::post('/achievements-post', [PageController::class, 'achievementsUpdate'])->name('achievements.update');
});

Route::get('adminka/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('adminka/login-post', [AdminController::class, 'loginPost'])->name('admin.login.post');



/* testing routes */
Route::get('send-mail', [MailController::class, 'index']);
Route::get('/test-mail', function() {
    return view('mail.order');
});