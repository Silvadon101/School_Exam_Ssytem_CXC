<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectChoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;

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
    return view('home');
});

// ?------------Single Resource routing-----------
// Route::resource('student',StudentsController::class);

// ?-----------Multiple Resource routing------------
Route::resources([
    'student' => StudentsController::class,
    'subject' => SubjectController::class,
    'subjectchoice' => SubjectChoiceController::class,
    'transaction' => TransactionController::class,
    'payment' => PaymentController::class
]);
