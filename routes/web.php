<?php

use App\Http\Controllers\V1\Admin\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\V1\Admin\MenusController;

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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('language', [Localization::class, "lang_change"])->name('LangChange');
Route::group(['middleware' => ['auth']], function () {
    Route::get('add-menu', [MenusController::class, 'AddMenus']);
    Route::post('save-user', 'UserController@saveUser');
    Route::put('edit-user', 'UserController@editUser');
});
