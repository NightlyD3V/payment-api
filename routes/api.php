<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::post('/process-payment', [PaymentController::class, 'processPayment']);