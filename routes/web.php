<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');

Route::get('/workers/create', [WorkerController::class, 'create'])->name('worker.create');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.show');

Route::post('/workers', [WorkerController::class, 'store'])->name('worker.store');

Route::get('/workers/update', [WorkerController::class, 'update'])->name('worker.update');

Route::get('/workers/delete', [WorkerController::class, 'delete'])->name('worker.delete');
