<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

    //authorized
    Route::group(['middleware' => ['revalidate','admin']], function () {
        Route::get('admin/task/list', function () {
            return view('task.list_task');
        })->name('task.list');
        Route::get('admin/task/detail', function () {
            return view('task.list_detail');
        })->name('task.detail');
        Route::get('admin/add-user', function () {
            return view('user.user_add_new');
        })->name('user.add_new');
       
        Route::get('admin/list-user', function () {
            return view('user.user_list');
        })->name('user.user_list');
    });

    Route::group(['middleware' => ['web']], function () {
        Route::post('post-login', [AuthController::class, 'adminLogin'])->name('login.post'); 
        Route::post('post-registration', [AuthController::class, 'adminRegistration'])->name('register.post'); 
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::post('create-user', [UserController::class, 'store'])->name('create.user'); 
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('admin/dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
    });
   
});

