<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::group(['middleware' => 'revalidate'], function () {
    Route::get('/', function () {
        return redirect('/admin/login');
    });
    Route::get('admin/login', function () {
        return view('admin.login');
    })->name('login');

    Route::get('admin/register', function () {
        return view('admin.register');
    });

    Route::group(['middleware' => ['web']], function () {
        Route::post('post-login', [AuthController::class, 'adminLogin'])->name('login.post'); 
        Route::post('post-registration', [AuthController::class, 'adminRegistration'])->name('register.post'); 
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('admin/dashboard', [AuthController::class, 'dashboard']); 
    });
});

