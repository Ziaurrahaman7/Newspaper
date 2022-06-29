<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteSettingController;
use Illuminate\Support\Facades\Route;

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
Route::post('/comment', [CommentController::class, 'index'])->name('comment');
// ============admin=================
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('can:admin')->name('dashboard');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/post', PostController::class);
    Route::resource('admin/sitesetting', SiteSettingController::class);
    Route::get('admin/comment', [CommentController::class, 'allcomment'])->name('admin.comment');
    Route::post('admin/comment/{comment}/edit', [CommentController::class, 'approved'])->name('admin.comment.approved');
});
require __DIR__.'/auth.php';
