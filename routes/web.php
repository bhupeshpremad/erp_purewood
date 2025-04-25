<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/logout', function () {
    return redirect('/');
})->name('logout');


// SUPER ADMIN ROUTES
Route::prefix('super-admin')->name('superadmin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('superadmin.dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('superadmin.users');
    })->name('users');

    Route::prefix('modules/sales')->name('sales.')->group(function () {
        Route::get('/lead/create', function () {
            return view('superadmin.modules.sales.lead.create');
        })->name('lead.create');

        Route::get('/lead/view', function () {
            return view('superadmin.modules.sales.lead.view');
        })->name('lead.view');

        Route::get('/quotation/create', function () {
            return view('superadmin.modules.sales.quotation.create');
        })->name('quotation.create');

        Route::get('/quotation/view', function () {
            return view('superadmin.modules.sales.quotation.view');
        })->name('quotation.view');
    });
});

// DEPARTMENT HEAD ROUTES
// SALES DEPARTMENT HEAD
Route::prefix('admin/sales')->name('admin.sales.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.sales.dashboard');
    })->name('dashboard');

    Route::prefix('modules')->group(function () {
        Route::get('/lead/create', function () {
            return view('admin.sales.modules.lead.create');
        })->name('lead.create');

        Route::get('/lead/view', function () {
            return view('admin.sales.modules.lead.view');
        })->name('lead.view');

        Route::get('/quotation/create', function () {
            return view('admin.sales.modules.quotation.create');
        })->name('quotation.create');

        Route::get('/quotation/view', function () {
            return view('admin.sales.modules.quotation.view');
        })->name('quotation.view');
    });
});
