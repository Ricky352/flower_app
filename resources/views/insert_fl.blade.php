@extends ('layout')

@section('title', 'Insert Flower')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ url('insert.css') }}">
@endsection

<h2>Insert a new Flower</h2>

<form class="container" method="post">
    @csrf
    <input type="text" name="name" placeholder="Flower Name"><br>
    <input type="text" name="price" placeholder="Price"><br>
    <input type="submit" value="Insert your Flower"><br>
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
