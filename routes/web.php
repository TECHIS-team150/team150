<?php

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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/goods', [App\Http\Controllers\TeamController::class, 'index']);

Route::post('/goods/register', [App\Http\Controllers\TeamController::class, 'store']);

Route::delete('/goods/{goods}', [App\Http\Controllers\TeamController::class, 'delete'])->name('/goods/{goods}');
Route::post('/goods/edit/{goods}', [App\Http\Controllers\TeamController::class, 'update']);
Route::get('/user', [App\Http\Controllers\TeamController::class, 'user']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// roleでの権限付与後のルーティング

// 管理者
Route::group(['middleware' => ['can:admin']], function () {
    // 商品登録
    Route::get('/goods/register', [App\Http\Controllers\TeamController::class, 'register']);
    // 編集
    Route::get('/goods/edit/{goods}', [App\Http\Controllers\TeamController::class, 'edit']);
});
