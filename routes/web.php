<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/',[AdminController::class,'welcome']); // ลิงค์กับ Admincontrooler welcome

Route::get('Personal',[AdminController::class,'Personal'])->name('Personal'); //ลิงค์กับ Admincontrooler Personal

Route::get('blog',[AdminController::class,'index'])->name('blog'); //ลิงค์กับ Admincontrooler blog

Route::get('admin/user/Pete',function (){
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login admin');
    
Route::fallback(function () {
    return "<h1> ไม่พบหน้าดังกล่าว </h1>";
});