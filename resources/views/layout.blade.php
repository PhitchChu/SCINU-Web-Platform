<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | SCINU Researcher Profile Generation Platform</title>

    {{-- นำเข้า Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    {{-- แถบเมนูข้างบน เริ่ม--}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">SCI NU Researcher Profile</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Personal')}}"> Personal </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}"> บทความทั้งหมด </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- แถบเมนูข้างบน จบ--}}
    <div class = "container py-2">
            @yield('content')
    </div>
</body>

</html>
