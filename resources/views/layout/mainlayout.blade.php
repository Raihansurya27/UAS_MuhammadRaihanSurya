<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>



<body>
<div class="main">

    <nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rental Buku</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
      </nav>

      <div class="body-content h-100">
        <div class="row g-0 h-100">
            <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">

                        @if (Auth::user()->role_id == 1)

                        <a href="/dashboard"  @if (request()->route()->uri== 'dashboard')class="active"

                        @endif>Dashboard</a>
                        <a href="/books" @if (request()->route()->uri== 'books' || request()->route()->uri== 'book-add' || request()->route()->uri== 'book-edit/{slug}' || request()->route()->uri== 'book-delete/{slug}' || request()->route()->uri== 'book-deleted' || request()->route()->uri== 'book-restore/{slug}')class="active"

                            @endif>Books</a>
                        <a href="/category" @if (request()->route()->uri== 'category' || request()->route()->uri== 'category-add' || request()->route()->uri== 'category-edit/{slug}' || request()->route()->uri== 'category-delete/{slug}' || request()->route()->uri== 'category-deleted' || request()->route()->uri== 'category-restore/{slug}') class=' active'

                            @endif>Categories</a>
                        <a href="/user"@if (request()->route()->uri== 'user')class="active"

                            @endif>Users</a>
                        <a href="/rentlog"@if (request()->route()->uri== 'rentlog')class="active"

                            @endif>Rent Log</a>
                        <a href="/logout"@if (request()->route()->uri== 'logout')class="active"

                            @endif>logout</a>
                        @else
                        <a href="/profile"@if (request()->route()->uri== 'profile')class="active"

                            @endif>Profile</a>
                        <a href="/logout"@if (request()->route()->uri== 'logout')class="active"

                            @endif>logout</a>

                        @endif



            </div>
            <div class="content p-5 col-lg-10">
                @yield('content')
            </div>

        </div>



    </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
