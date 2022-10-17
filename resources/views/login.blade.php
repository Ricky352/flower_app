@extends('layout')

@section('title', 'Log In')

@section('css')
    <link rel="stylesheet" href="{{ asset('login.css') }}">
@endsection

@section('content')
    <h1>Log In</h1>
    <form class="container" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Log In">
    </form>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
