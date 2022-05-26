<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\auth\PatientController;
use App\Http\Controllers\auth\PsychologistController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\auth\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

//Patient
Route::get('/login', [PatientController::class, 'index'])->name('login');
Route::post('/login', [PatientController::class, 'login']);

Route::get('/register', [PatientController::class, 'registerPage'])->name('register');
Route::post('/register', [PatientController::class, 'register']);

Route::get('/', [HomeController::class, 'index'])->name('user.home');


Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/appointment', [BookingController::class, 'index'])
        ->name('list_appointment');
    Route::get('/appointment/create', [BookingController::class, 'create'])
        ->name('make_appointment');
    Route::post('/appointment/create', [BookingController::class, 'store'])
        ->name('create_appointment');
    Route::get('/appointment/payment', [PaymentController::class, 'index'])
        ->name('payment');
    Route::post('/appointment/payment', [PaymentController::class, 'store'])
        ->name('proccess_payment');
    Route::get('/logout', [PatientController::class, 'logout'])->name('logout');
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//psy
Route::get('psychologist/login', [PsychologistController::class, 'index'])
->name('psychologist.login');
Route::post('psychologist/login', [PsychologistController::class, 'login']);

Route::group(['middleware' => ['auth:webpsy']], function () {

    Route::get('psychologist/', [DoctorController::class, 'index'])
        ->name('psychologist.home');

    Route::get('psychologist/schedule', [DoctorController::class, 'schedule'])
        ->name('psychologist.schedule');

    Route::get('psychologist/feedback', [DoctorController::class, 'feedback'])
        ->name('psychologist.feedback');

    Route::get('/psychologist/logout', [PsychologistController::class, 'logout'])
        ->name('psychologist.logout');
});

//staff
Route::get('staff/login', [StaffController::class, 'index'])
    ->name('staff.login');
Route::post('staff/login', [StaffController::class, 'login']);

Route::group(['middleware' => ['auth:webstaff']], function () {

    Route::get('staff/', [AdminController::class, 'index'])
        ->name('staff.home');

    Route::get('staff/schedule', [AdminController::class, 'schedule'])
        ->name('staff.schedule');
    Route::get('staff/schedule/{id}', [BookingController::class, 'destroy'])
        ->name('schedule.delete');



//crud_staff
    Route::get('staff/management/crud_staff', [AdminController::class, 'managementStaff'])
        ->name('staff/management/crud_staff');
    Route::get('staff/management/form/blank_staff', [AdminController::class, 'blankStaff'])
        ->name('staff/management/form/blank_staff');
    Route::post('staff/management/crud_staff', [AdminController::class, 'store1'])
        ->name('store1');
    Route::get('staff/management/edit/blank_staff/{id}', [AdminController::class, 'edit1'])
        ->name('edit1');
    Route::post('staff/management/edit/blank_staff/{id}', [AdminController::class, 'update1'])
        ->name('update1');
    Route::get('staff/management/crud_staff/{id}', [AdminController::class, 'destroy1'])
        ->name('destroy1');

//crud_psikolog
    Route::get('staff/management/crud_psikolog', [AdminController::class, 'managementPsikolog'])
        ->name('staff/management/crud_psikolog');
    Route::get('staff/management/form/blank_psikolog', [AdminController::class, 'blankPsikolog'])
        ->name('staff/management/form/blank_psikolog');
    Route::post('staff/management/crud_psikolog', [AdminController::class, 'store2'])
        ->name('store2');
        Route::get('staff/management/edit/blank_psikolog/{id}', [AdminController::class, 'edit2'])
        ->name('edit2');
    Route::post('staff/management/edit/blank_psikolog/{id}', [AdminController::class, 'update2'])
        ->name('update2');
    Route::get('staff/management/crud_psikolog/{id}', [AdminController::class, 'destroy2'])
        ->name('destroy2');

//crud_pasien
    Route::get('staff/management/crud_pasien', [AdminController::class, 'managementPasien'])
        ->name('staff/management/crud_pasien');
    Route::get('staff/management/form/blank_pasien', [AdminController::class, 'blankPasien'])
        ->name('staff/management/form/blank_pasien');
    Route::post('staff/management/crud_pasien', [AdminController::class, 'store3'])
        ->name('store3');
    Route::get('staff/management/edit/blank_pasien/{id}', [AdminController::class, 'edit3'])
        ->name('edit3');
    Route::post('staff/management/edit/blank_pasien/{id}', [AdminController::class, 'update3'])
        ->name('update3');
    Route::get('staff/management/crud_pasien/{id}', [AdminController::class, 'destroy3'])
        ->name('destroy3');

    Route::get('staff/feedback', [AdminController::class, 'feedback'])
        ->name('staff.feedback');




    Route::get('staff/management/feedback', [AdminController::class, 'blankFeedback'])
        ->name('staff/management/feedback');

    Route::get('/staff/logout', [StaffController::class, 'logout'])
        ->name('staff.logout');
});

Route::post('feedback', [FeedbackController::class, 'feedback'])->name('feedback');
