<?php

use App\Jobs\ProcessRefund;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/refund', function () {
    ProcessRefund::dispatch();

    Log::info('Dispatched ProcessRefund job');

    return 'Refund processed';
});
