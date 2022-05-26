<?php

use App\Http\Controllers\auth\PatientController;
use App\Http\Controllers\auth\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return [
        'result' => true,
    ];
});

//Patient
Route::get('/login', [PatientController::class, 'index'])->name('login');
Route::post('/login/patient', [PatientController::class, 'login']);

Route::get('/register', [PatientController::class, 'registerPage'])->name('register');
Route::post('/register/patient', [PatientController::class, 'register']);

Route::get('/logout', [PatientController::class, 'logout'])->middleware('auth');

//staff
route::post('/staff/regis', [StaffController::class, 'register']);
