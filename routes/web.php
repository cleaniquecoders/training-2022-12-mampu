<?php

use App\Exports\ExportUser;
use App\Exports\MultipleSheets;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/export/users', function () {
    return Excel::download(new ExportUser, 'users.xlsx');
});

Route::get('/export/multiple-sheets', function () {
    return (new MultipleSheets)->download('multiplesheets.xlsx');
});

// Route::get('/export/excel/{type}', function ($type) {
//     // return Excel::download(new ExportUser, 'users.xlsx');
// });
