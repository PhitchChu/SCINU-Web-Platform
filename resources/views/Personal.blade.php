@extends('layout')
@section('title', 'Personal')
@section('content')
    <h2>Personal</h2>
    <hr>
    <div class="content-container">
        <p>Department of Computer Science and Information Technology</p>
        <div class="search-box">
            <form action="/search" method="get">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="profile-container">
        <div class="profile-item">
            <img src="path/to/profile.jpg" alt="Profile Picture" class="profile-picture">
            <div class="profile-details">
                <p>Assistant Professor Mark Def</p>
                <p>Areas of Expertise: Database System</p>
                <p>Award: Outstanding Research Personnel Award 2024</p>
            </div>
        </div>
        <div class="profile-item">
            <img src="path/to/profile.jpg" alt="Profile Picture" class="profile-picture">
            <div class="profile-details">
                <p>Assistant Professor Mark Def</p>
                <p>Areas of Expertise: Database System</p>
                <p>Award: Outstanding Research Personnel Award 2024</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .content-container {
        display: flex;
        align-items: center;
    }
    .content-container p {
        margin-right: 20px;
    }
    .search-box {
        margin-left: auto;
    }
    .search-box input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .search-box button {
        height: 36px;
        border: none;
        background: #007bff;
        color: white;
        padding: 0 15px;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }
    .search-box button:hover {
        background: #0056b3;
    }

    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .profile-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
    }
    .profile-picture {
        width: 100px; /* ขนาดของรูปภาพโปรไฟล์ */
        height: 100px;
        margin-right: 20px;
        border-radius: 50%; /* ทำให้รูปภาพเป็นวงกลม */
    }
    .profile-details p {
        margin: 5px 0;
        font-size: 16px;
        color: #555;
    }
</style>
