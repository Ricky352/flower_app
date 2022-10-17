@extends('layout')

@section('title', 'Flowers List')

@section('css')
    <link rel="stylesheet" href="{{ url('flowers.css') }}">
@endsection

@section('content')
    <div id="container">
        <h1 class="title">Flower List</h1>

        <table class="flowerContainer">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Details</th>
                <th>Update the Flower</th>
                <th>Delete the Flower</th>
            </tr>
            @if (!empty($flowers))
                @foreach ($flowers as $f)
                    <tr>
                        <td>{{ $f->name }}</td>
                        <td>{{ $f->price }}$</td>
                        <td><a href="{{ url('/flower/' . $f->id) }}">Details</a></td>
                        <td><a href="{{ url('/flowers/update/' . $f->id) }}" style="text-decoration: none">Update</a></td>
                        <td><a href="{{ url('/flowers/delete/' . $f->id) }}" style="text-decoration: none">Delete</a></td>
                    </tr>
                @endforeach
            @else
                <p>No flowers available</p>
            @endif
        </table>

        @if (session('success'))
            <div class="success">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if (session('error'))
            <div class="error">
                <p>{{ session('error') }}</p>
            </div>
        @endif
    </div>

@endsection

{{-- DONE --}}
