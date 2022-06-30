<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteSettingController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/post/{slug}', [HomeController::class, 'show']);
Route::get('/category/{category_id}', [HomeController::class, 'catbase']);
Route::get('/profile/{id}', [HomeController::class, 'profile']);
Route::post('/comment', [CommentController::class, 'index'])->name('comment');
// ============admin=================
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(["can:all access"])->name('dashboard');

Route::group(['middleware' => ['can:all access']], function () {
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/post', PostController::class);
    Route::resource('admin/sitesetting', SiteSettingController::class);
    Route::get('admin/comment', [CommentController::class, 'allcomment'])->name('admin.comment');
    Route::post('admin/comment/{comment}/edit', [CommentController::class, 'approved'])->name('admin.comment.approved');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
require __DIR__.'/auth.php';
