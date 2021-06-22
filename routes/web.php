<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dash');
})->name('dashboard');


Route::resource('devoirs', App\Http\Controllers\DevoirController::class);

//Route::resource('/employee',App\Http\Controllers\EmployeeController::class);
//Route::resource('employee', App\Http\Controllers\EmployeeController::class);
Route::get('/empmodel',[EmployeeController::class,'addEmployee'])->name('employee.add');
Route::post('/empmodel',[EmployeeController::class,'saveEmployee'])->name('save.employee');
Route::get('/employeeslist',[EmployeeController::class,'employeeList'])->name('employee.list');
Route::get('/edit-employee/{id}',[EmployeeController::class,'editEmployee'])->name('employee.edit');
Route::get('/delete-employee/{id}',[EmployeeController::class,'deleteEmployee'])->name('employee.delete');
Route::post('/update-post',[EmployeeController::class,'updateEmployee'])->name('update.employee');



Route::resource('users', App\Http\Controllers\UserController::class);



