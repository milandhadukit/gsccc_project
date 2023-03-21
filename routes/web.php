<?php

use App\Http\Controllers\V1\Admin\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\V1\Admin\MenusController;
use App\Models\Translation;
use App\Models\User;
use App\Http\Controllers\V1\Admin\TranslatorController;

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
    // use Spatie\TranslationLoader\LanguageLine;

    // Translation::create([
    //    'group' => 'test',
    //    'key' => 'test',
    //    'text' => ['en' => 'This is a required field', 'sp' => 'Dit is een zzxz','fr' => 'Dit is een verplicht veld'],
    // ]);
    // echo "calle";
    // echo "Cakked";
});
Route::get('lang/{lang}', [Localization::class, 'change'])->name('locale.change');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('language', [Localization::class, "lang_change"])->name('LangChange');

Route::group(['middleware' => ['auth']], function () { 
    Route::get('add-menu', [MenusController::class,'AddMenus'])->name('menus.add');
    Route::post('store-menu', [MenusController::class,'storeMenus'])->name('menus.store');
    
    Route::get('add-translate', [TranslatorController::class,'addTranslate'])->name('translate.add');
 
   
   
});



