<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

route::get('/index',[FirstController::class, 'index'])->name('index');

route::get('/index/wpisy',[FirstController::class, 'list'])->name('lista.wpisy');

route::get('/index/create',[FirstController::class, 'create'])->name('lista.dodac');
route::POST('/index/save',[FirstController::class, 'save'])->name('zapisz');
route::get('/index/save/{id}',[FirstController::class, 'edit'])->name('edytuj');
route::get('/index/update/{id}',[FirstController::class, 'update'])->name('zaktualizuj');
route::get('/index/usun/{id}',[FirstController::class, 'delete'])->name('usun');
