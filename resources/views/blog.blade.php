@extends('layout')
@section('title', 'บทความทั้งหมด')
@section('content')
    <h2 class="text text-center py-2">บทความทั้งหมด</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
