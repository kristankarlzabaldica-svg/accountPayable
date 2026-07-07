<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hello');
});


use App\Http\Controllers\SupplierBillController;
use App\Http\Controllers\PaymentController;

Route::get('/supplier-bills', [SupplierBillController::class, 'index'])
    ->name('supplier-bills.index');

Route::get('/payments', [PaymentController::class, 'index'])
    ->name('payments.index');