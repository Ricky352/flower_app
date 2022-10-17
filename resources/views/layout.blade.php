<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link rel="stylesheet" href="{{ url('reset.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar">
        <a href="{{ url('/') }}" class="navbarText">Home page</a>
        <a href="{{ url('/flowers') }}" class="navbarText">Inventory</a>
        <a href="{{ url('/comments') }}" class="navbarText">Comments</a>
        <a href="{{ url('/flowers/insert') }}" class="navbarText">Insert Flower</a>
        <a href="{{ url('/contact') }}" class="navbarText">Contact Us</a>
        @if (!Auth::check())
            <a href="{{ url('/login') }}" class="navbarText">Log In</a>
        @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
        @endif
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
