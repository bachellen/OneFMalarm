<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlarmController;
use App\Http\Controllers\ImportExcelController;
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
    return view('welcome');
});

Route::get('/alarms',  [AlarmController::class,'getAllAlarm'])->name('alarms.all');
Route::get('/import-form', [AlarmController::class,'getAllAlarm']);
//Route::get('/import-form/import', [AlarmController::class,'import']);
Route::post('/import',  [AlarmController::class,'import'])->name('alarm.import');
Route::get('/export' ,[AlarmController::class,'exportIntoCSV']);
Route::get('/import_excel', [ImportExcelController::class,'index']);
// Route::post('/import_excel/import',  [ImportExcelController::class,'import']);