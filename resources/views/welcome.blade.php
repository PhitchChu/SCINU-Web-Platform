@extends('layout')
@section('title')
{{-- ชื่อเว็บบน tapbar --}}
    Home 
@endsection
@section('content')
<div class = "container py-5">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <h2>SciNU Researcher Profile Generation Platform</h2>
    <h2>Faculty of Science Naresuan University</h2>
    <br>
    <button class = "button home">
        Learn more
    </button>
    <br>
    <br>
    <br>
    <p>ผู้พัฒนาระบบ : {{$owner}}</p>
    <p>Latest update : {{$update}}</p>
    </center>
</div>
@endsection