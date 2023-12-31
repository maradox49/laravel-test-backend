<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\DownloadFileController;

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

Route::get('/uploadfile', [UploadFileController::class, 'index']);
Route::post('/uploadfile',[UploadFileController::class, 'showUploadFile']);

Route::post('/downloadrequest', [DownloadFileController::class, 'downloadRequest']);
Route::post('/downloadfile',[DownloadFileController::class, 'downloadFile']);