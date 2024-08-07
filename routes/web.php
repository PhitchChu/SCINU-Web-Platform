<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/',[AdminController::class,'welcome']); // ลิงค์กับ Admincontroller welcome
Route::get('Personal',[AdminController::class,'Personal'])->name('Personal'); //ลิงค์กับ Admincontroller Personal
Route::get('blog',[AdminController::class,'index'])->name('blog'); //ลิงค์กับ Admincontroller blog
Route::get('create',[AdminController::class,'create']);
Route::post('insert',[AdminController::class,'insert']); //ทำงานอยู่ที่ admincontroller
Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete'); //ปุ่มเชื่อมลบบทความกับฐานข้อมูล
Route::get('change/{id}', [AdminController::class, 'change'])->name('change'); // update ปุ่มสถานะเผยแพร่ของบทความ
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit'); // ปุ่ม edit 
Route::post('update/{id}', [AdminController::class, 'update'])->name('update');//ตอนกด update ให้ส่ง id ของบทความไปด้วย


Route::get('admin/user/Pete',function (){
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login admin');
    
Route::fallback(function () {
    return "<h1> ไม่พบหน้าดังกล่าว </h1>";
});