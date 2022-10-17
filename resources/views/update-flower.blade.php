@extends ('layout')

@section('title', 'Update Flower')
@section('css')
    <link rel="stylesheet" href="{{ url('update.css') }}">
@endsection
@section('content')

<h2>Update Flower</h2>

<form class="container" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Flowers Name" value="{{ $flower->name }}"><br>
    <input type="text" name="price" placeholder="Price" value="{{ $flower->price }}"><br>
    <input type="submit" value="Update Flower"><br>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
