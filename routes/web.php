<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubServiceController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users',UserController::class)->except('create','store','show');
Route::resource('clients',ClientController::class)->except('edit','create','store','show','update');
Route::resource('categories',CategoryController::class)->except('show');
Route::resource('services',ServiceController::class)->except('show');
Route::resource('subservices',SubServiceController::class)->except('show');
Route::resource('units',UnitController::class)->except('show');
Route::resource('orders',OrderController::class);
Route::resource('options',OptionController::class)->except('show');
Route::resource('quests',QuestController::class)->except('show');
       
       
Route::get('/changePassword',[HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword',[HomeController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('changeStatus', [ClientController::class,'changeStatus']);
Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF']);
Route::get('getbanner', [BannerController::class,'create'])->name('getbanner');
Route::post('createbanner', [BannerController::class,'store'])->name('createbanner');
Route::get('mark_as_read_all', [OrderController::class,'read'])->name('mark_as_read_all');
Route::get('mark_as_read_one/{id}', [OrderController::class,'readOne']);

});