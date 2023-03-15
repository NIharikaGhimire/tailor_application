<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\allInOneController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\MeasurementDetailController;


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
    'verified'
])
    ->group(function () {
        Route::get('/index', function () {
            return view('admin.index');
        })->name('index');

        // Route for Personal Details

        Route::get('admin/personaldetail/index', [PersonalDetailController::class, 'index'])->name('admin.personaldetail.index');
        Route::get('admin/personaldetail/create', [PersonalDetailController::class, 'create'])->name('admin.personaldetail.create');
        Route::post('admin/personaldetail/store', [PersonalDetailController::class, 'store'])->name('admin.personaldetail.store');
        Route::get('admin/personaldetail/edit/{id}', [PersonalDetailController::class, 'edit'])->name('admin.personaldetail.edit');
        Route::post('admin/personaldetail/update', [PersonalDetailController::class, 'update'])->name('admin.personaldetail.update');
        Route::get('admin/personaldetail/destroy/{id}', [PersonalDetailController::class, 'destroy'])->name('admin.personaldetail.destroy');





        // Route For Measurement Details

        Route::get('admin/measurementdetail/index', [MeasurementDetailController::class, 'index'])->name('admin.measurementdetail.index');
        Route::get('admin/measurementdetail/create', [MeasurementDetailController::class, 'create'])->name('admin.measurementdetail.create');
        Route::post('admin/measurementdetail/store', [MeasurementDetailController::class, 'store'])->name('admin.measurementdetail.store');
        Route::get('admin/measurementdetail/edit/{id}', [MeasurementDetailController::class, 'edit'])->name('admin.measurementdetail.edit');
        Route::post('admin/measurementdetail/update', [MeasurementDetailController::class, 'update'])->name('admin.measurementdetail.update');
        Route::get('admin/measurementdetail/destroy/{id}', [MeasurementDetailController::class, 'destroy'])->name('admin.measurementdetail.destroy');



        // for allinonecontroller
        Route::get('admin/category/pant', [allInOneController::class, 'pant'])->name('admin.category.pant');
        Route::get('admin/category/coat', [allInOneController::class, 'coat'])->name('admin.category.coat');
        Route::get('admin/category/daura', [allInOneController::class, 'daura'])->name('admin.category.daura');
        Route::get('admin/category/surwal', [allInOneController::class, 'surwal'])->name('admin.category.surwal');
        Route::get('admin/category/shirt', [allInOneController::class, 'shirt'])->name('admin.category.shirt');
        Route::get('admin/category/jwaricoat', [allInOneController::class, 'jwaricoat'])->name('admin.category.jwaricoat');
        Route::get('admin/category/longcoat', [allInOneController::class, 'longcoat'])->name('admin.category.longcoat');
    });
