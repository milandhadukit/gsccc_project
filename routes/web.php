<?php

use App\Http\Controllers\V1\Admin\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\V1\Admin\MenusController;
use App\Models\Translation;
use App\Models\User;
use App\Http\Controllers\V1\Admin\TranslatorController;
use App\Http\Controllers\V1\Admin\DashboardController;

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
Route::get('test', function () {
    // Translation::updateOrCreate(
    //     [
    //         'group' => 'menu',
    //         'key'   => 'list_title_table_fn',
    //         'text'  => ['en' => 'First Name', 'gu' => 'પ્રથમ નામ', 'hi' => 'पहला नाम'],
    //     ],
    //     [
    //         'group' => 'menu',
    //         'key'   => 'list_title_table_ln',
    //         'text'  => ['en' => 'Last Name', 'gu' => 'છેલ્લું નામ', 'hi' => 'उपनाम'],
    //     ],
    //     [
    //         'group' => 'menu',
    //         'key'   => 'list_title_table_sr',
    //         'text'  => ['en' => 'Sr No', 'gu' => 'ક્રમ નં', 'hi' => 'क्रमांक'],
    //     ],
    // );
    echo "calle";
    echo "Cakked";
});

Route::get('lang/{lang}', [Localization::class, 'change'])->name('locale.change');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('language', [Localization::class, "lang_change"])->name('LangChange');

Route::group(['middleware' => ['auth']], function () {

    Route::get('deshboard', [DashboardController::class,'indexDeshboard'])->name('index.deshboard');

    Route::get('add-menu', [MenusController::class,'AddMenus'])->name('menus.add');
    Route::post('store-menu', [MenusController::class,'storeMenus'])->name('menus.store');


    Route::get('list-translate', [TranslatorController::class,'listData'])->name('translate.list');
    Route::get('add-translate', [TranslatorController::class,'addTranslate'])->name('translate.add');
    Route::post('store-translate', [TranslatorController::class,'storeTranslate'])->name('translate.store');
    Route::get('edit-translate/{id}', [TranslatorController::class,'editTranslate'])->name('translate.edit');


 
   
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('add-menu', [MenusController::class, 'AddMenus'])->name('menus.add');
    Route::get('list-menu', [MenusController::class, 'List'])->name('menus.list');
    Route::post('store-menu', [MenusController::class, 'storeMenus'])->name('menus.store');

    Route::get('add-translate', [TranslatorController::class, 'addTranslate'])->name('translate.add');
});
