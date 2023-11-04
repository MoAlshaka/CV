<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'cv','middleware'=> ['max_execution_time']],function(){
    Route::get('information',[CVController::class,'info'])->name('cv.info');
    Route::post('information',[CVController::class,'store'])->name('cv.store');
    Route::get('design1',[CVController::class,'design1'])->name('cv.design1');
    Route::get('design',[CVController::class,'design'])->name('cv.design');
    // Route::post('/download-pdf', [PDFController::class,'downloadPageAsPDF'])->name('downloadPageAsPDF');
    Route::get('download-pdf', [PDFController::class, 'downloadPageAsPDF'])->name('downloadPageAsPDF');

});
