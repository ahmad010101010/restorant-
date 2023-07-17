<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CatygoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[WelcomeController::class,'index']);

Route::get('/categories',[CatygoryController::class ,'index'])->name('categories.index');
Route::get('/categories/{category}',[CatygoryController::class ,'show'])->name('categories.show');
Route::get('/menus',[FrontendMenuController::class ,'index'])->name('menus.index');
Route::get('/resevations/step_one',[FrontendReservationController::class ,'stepOne'])->name('reservation.step.one');
Route::post('/resevations/step_one',[FrontendReservationController::class ,'storeStepOne'])->name('reservations.store.step.one');

Route::get('/resevations/step_tow',[FrontendReservationController::class ,'stepTow'])->name('reservation.step.tow');
Route::post('/resevations/step_tow',[FrontendReservationController::class ,'storeStepTow'])->name('reservation.store.step.tow');
Route::get('/thankyou',[WelcomeController::class,'thankyou'])->name('thankyou');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);

});

require __DIR__.'/auth.php';
