<?php

use App\Jobs\ProcessRefund;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/refund', function () {
    ProcessRefund::dispatch();

    return 'Refund processed';
});
