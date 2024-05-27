<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $owner = "น้องพีทกับน้องฮาร์ท";
    $update = "15 พฤษภาคม 2567";
    return View('welcome',compact('owner', 'update'));
});

Route::get('admin/user/Pete',function (){
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login admin');

Route::fallback(function () {
    return "<h1> ไม่พบหน้าดังกล่าว </h1>";
});

Route::get('Personal', function () {
    return view('Personal');
})->name('Personal');

// Route::get('about/{name}', function ($name) {
//     return "<h1>ทดสอบ ${name}</h1>";
// });

Route::get('blog', function() {
    $blogs = [
        [
            'title'=>'บทความที่ 1',
            'content'=>'เรื่องบทความที่ 1',
            'status'=>true
        ],
        [
            'title'=>'บทความที่ 2',
            'content'=>'เรื่องบทความที่ 2',
            'status'=> false
        ],
        [
            'title'=>'บทความที่ 3',
            'content'=>'เรื่องบทความที่ 3',
            'status'=>true
        ],
        [
            'title'=>'บทความที่ 4',
            'content'=>'เรื่องบทความที่ 4',
            'status'=>true
        ],
        [
            'title'=>'บทความที่ 5',
            'content'=>'เรื่องบทความที่ 5',
            'status'=>false
        ],
    ];
    return view('blog',compact('blogs'));
})->name('blog');