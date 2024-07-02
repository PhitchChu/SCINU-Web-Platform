<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function welcome(){ //ทำหน้าที่ แสดงข้อมูลหน้า welcome
        $owner = "น้องพีทกับน้องฮาร์ท";
        $update = "15 พฤษภาคม 2567";
    return View('welcome',compact('owner', 'update'));
    }

    function Personal(){ //ทำหน้าที่ แสดงข้อมูลเกี่บวกับเรา
        return view('Personal');
    }

    function index(){ //ทำหน้าที่ แสดงข้อมูลบทความทั้งหมด
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
        ];
        return view('blog',compact('blogs'));
    }

}
