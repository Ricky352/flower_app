@extends('layout')

@section('title', 'Log Out')

@section('css')
    <link rel="stylesheet" href="{{ asset('login.css') }}">
@endsection

@section('content')
    <h1>Log Out</h1>
    <form class="container" method="post">
        @csrf
        <input type="submit" value="Log Out">
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
