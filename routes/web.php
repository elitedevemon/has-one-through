<?php

use App\Http\Controllers\StudentSchoolPhoneNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('relation', [StudentSchoolPhoneNumberController::class, 'index']);