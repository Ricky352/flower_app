@extends('layout')

@section('title', 'Account')

@section('css')
    <link rel="stylesheet" href="account.css">
@endsection

@section('content')
    <div class="maincontainer"></div>
    <h1 class="acc">Account Details</h1>
    <div class="accountContainer">
        <p>First Name: {{ Auth::user()->first_name }}</p>
        <p>Last Name: {{ Auth::user()->last_name }}</p>
        <p>City: {{ Auth::user()->city }}</p>
        <p>Postal Code: {{ Auth::user()->postal_code }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
    </div>
@endsection
