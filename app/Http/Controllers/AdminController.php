<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // import เชื่อมฐานข้อมูล

class AdminController extends Controller
{
    function welcome()
    { //ทำหน้าที่ แสดงข้อมูลหน้า welcome
        $owner = "น้องพีทกับน้องฮาร์ท";
        $update = "15 พฤษภาคม 2567";
        return View('welcome', compact('owner', 'update'));
    }

    function Personal()
    { //ทำหน้าที่ แสดงข้อมูลเกี่บวกับเรา
        return view('Personal');
    }

    function index()
    { //ทำหน้าที่ แสดงข้อมูลบทความทั้งหมด
        $blogs = DB::table('blogs')->get(); // ระบุชื่อ blogs ตารางที่ต้องการเข้าถึงข้อมูลมาเก็บไว้ใน blogs
        return view('blog', compact('blogs'));
    }

    function create()
    {
        return view('form');
    }

    function insert(Request $request)
    { //รับ requset ที่ส่งมานำมาตรวจสอบก่อนว่าควรบันทึกลงฐานข้อมูลหรือไม่
        $request->validate(
            [
                'title' => 'required|max:50', // ต้องใส่ชือบทความทุกครั้ง
                'content' => 'required' // ต้องมีการระบุเนื้อหาบทความ
            ],
            [ //แจ้ง error เป็นภาษาไทย
                'title.required' => 'กรุณาป้อนชื่อบทความ',
                'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required' => 'กรูณาป้อนบทความของคุณ'
            ]
        );
        //สร้างตัวเเปรเพื่อเก็บข้อมูลที่ส่งมาจากฟอร์ม
        $data=[
            'title'=> $request->title,
            'content'=> $request->content
        ];
        //นำข้อมูลไปเห็บในฐานข้อมูล
        DB::table('blogs')->insert($data);
        return redirect('/blog');
    }

    function delete($id){
        (DB::table('blogs')->where('id',$id)->delete()); // สั่งลบเมื่อกดปุ่ม
        return redirect('/blog');
    }

    function change($id){
        $blog=DB::table('blogs')->where('id',$id)->first();
        $data=[
            // ใส่ ! เป็นการคอนเวิรืสค่าสถานะ เมื่อกดเผยแพร่/ฉบับร่างจะเปลี่ยนไป
            'status'=>!$blog->status
        ];
        // เมื่อ update ได้ก็ส่งไปที่ DB
        DB::table('blogs')->where('id',$id)->update($data);
        return redirect('/blog');
    }
}
