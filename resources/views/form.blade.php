@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
        {{-- /insert รับเอาข้อมูลจากฟอร์มไปใช้งาน --}}
    <form method="POST" action="/insert">
        {{-- @csrf ตรวจสอบตวามถูดต้องของข้อมูลในแบบฟอร์ม --}}
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        {{-- ผลลัพธ์จากการตรวจสอบ error Title --}}
        @error('title') 
            <div class= my-2>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror


        {{-- ป้อนเนื้อหาบทความ --}}
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        {{-- ผลลัพธ์จากการตรวจสอบ error Content --}}
        @error('content') 
            <div class= my-2>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
@endsection
