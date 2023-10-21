<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registrationController;
use App\Models\User;
use App\Http\Controllers\CustomerController;
use App\Models\customer;

// Route::get('/form',[registrationController::class,'Home']);
// Route::post('/register',[registrationController::class,'Register']);

// Route::get('/data',function(){
// $data = user::all();
// echo "<pre>";
// print_r($data->toArray());
// });

Route::get('/reg_form',[CustomerController::class,'showForm']);
Route::post('/register',[CustomerController::class,'registration']);
Route::get('/customers/view',[CustomerController::class,'showCustomers']);