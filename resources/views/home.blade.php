@extends('layout')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ url('home.css') }}">
@endsection

@section('content')
    <div class="cont">
        <h1 class="title">Home</h1>
        <div class="conta">
            <a class="a" href="/login">Log In</a>
            <a class="a" href="/register">Register</a>
        </div>
    </div>
@endsection
