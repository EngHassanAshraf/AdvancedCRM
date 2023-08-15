<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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

Route::view('/', 'index');

Route::post('/addemp', [EmployeeController::class,'addNewEmp']);
Route::get('/showdata', [EmployeeController::class,'getAllEmployees']);

Route::get('/deleteemp/{id}', [EmployeeController::class,'deleteEmp']);

Route::get('/showsingle/{id}', [EmployeeController::class, 'showSingle']);
