<?php

use App\Http\Controllers\V1\Admin\CmsController;
use App\Http\Controllers\V1\Admin\DashboardController;
use App\Http\Controllers\V1\Admin\Localization;
use App\Http\Controllers\V1\Admin\MenusController;
use App\Http\Controllers\V1\Admin\TranslatorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Admin\HomePageController;

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

    Route::get('deshboard', [DashboardController::class, 'indexDeshboard'])->name('index.deshboard');

    /**Menu Related*/
    Route::group(['prefix' => 'menus'], function () {
        Route::get('add-menu', [MenusController::class, 'AddMenus'])->name('menus.add');
        Route::post('store-menu', [MenusController::class, 'storeMainMenus'])->name('menus.store');

        Route::get('add-sub-menu', [MenusController::class, 'addSubMenu'])->name('sub.menus.add');
        Route::post('store-sub-menu', [MenusController::class, 'storeSubMenus'])->name('sub.menus.store');

    });

    /**Translate Related*/
    Route::group(['prefix' => 'translate'], function () {
        Route::get('list-translate', [TranslatorController::class, 'listData'])->name('translate.list');
        Route::get('add-translate', [TranslatorController::class, 'addTranslate'])->name('translate.add');
        Route::post('store-translate', [TranslatorController::class, 'storeTranslate'])->name('translate.store');
        Route::get('edit-translate/{id}', [TranslatorController::class, 'editTranslate'])->name('translate.edit');
        Route::post('update-translate/{id}', [TranslatorController::class, 'updateTranslate'])->name('translate.update');
        Route::get('delete-translate/{id}', [TranslatorController::class, 'deleteTranslate'])->name('translate.delete');
    });

    /**Cms Related*/
    Route::group(['prefix' => 'cms'], function () {
        Route::get('/list', [CmsController::class, 'List'])->name('cms.list');
        Route::post('/add', [CmsController::class, 'updateProfile']);
        Route::post('/update', [CmsController::class, 'ChangePassword']);
        Route::get('/delete', [CmsController::class, 'userDelete']);

        /**home cms Related*/
        Route::group(['prefix' => 'home'], function () {
            Route::get('/homepage', [HomePageController::class, 'sliderIndex'])->name('home.list');
            Route::get('/slider-add', [HomePageController::class, 'sliderAdd'])->name('slider.add');
            Route::post('/slider-store', [HomePageController::class, 'sliderStore'])->name('slider.store');

        });

    });

});
