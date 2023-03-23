<?php

use App\Http\Controllers\V1\Admin\CmsController;
use App\Http\Controllers\V1\Admin\DashboardController;
use App\Http\Controllers\V1\Admin\Localization;
use App\Http\Controllers\V1\Admin\MenusController;
use App\Http\Controllers\V1\Admin\TranslatorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Admin\HomePageController;

use App\Model\Cms;
use Illuminate\Support\Facades\DB;

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
    $data = \DB::table('sliders')->get();
    return view('pages.cms', compact('data'));
    // echo "calle";
    // echo "Cakked";
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
    });

        /**home cms Related*/
        Route::group(['prefix' => 'home'], function () {
            Route::get('/homepage', [HomePageController::class, 'sliderIndex'])->name('home.list');
            Route::get('/slider-add', [HomePageController::class, 'sliderAdd'])->name('slider.add');
            Route::post('/slider-store', [HomePageController::class, 'sliderStore'])->name('slider.store');
            Route::get('/slider-edit/{id}', [HomePageController::class, 'editSlider'])->name('slider.edit');
            Route::post('/slider-update/{id}', [HomePageController::class, 'updateSlider'])->name('slider.update');
            Route::get('/slider-delete/{id}', [HomePageController::class, 'deleteSlider'])->name('slider.delete');

            Route::get('/homeabout-page', [HomePageController::class, 'homeAboutPage'])->name('homeabout.page');
            Route::post('/homeabout', [HomePageController::class, 'homeAbout'])->name('homeabout');

            Route::get('/film-index', [HomePageController::class, 'indexImageVideo'])->name('filmvideo.index');
            Route::get('/film-video', [HomePageController::class, 'addImageVideo'])->name('filmvideo.add');
            Route::post('/film-video', [HomePageController::class, 'storeImageVideo'])->name('filmvideo.store');
            Route::get('/film-edit/{id}', [HomePageController::class, 'editImageVideo'])->name('filmvideo.edit');
            Route::post('/film-update/{id}', [HomePageController::class, 'updateImageVideo'])->name('filmvideo.update');
            Route::get('/film-delete/{id}', [HomePageController::class, 'deleteImageVideo'])->name('filmvideo.delete');



        });
    });
});
