@extends('layout')

@section('title', 'Flower Details')

@section('css')
    <link rel="stylesheet" href="{{ url('flowers.css') }}">
@endsection

@section('content')
    <div id="container">
        <h1 class="title">Flower Details</h1>

        <table class="flowerContainer">
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
            @if (!empty($flowers))
                    <tr>
                        <td>{{ $flowers->name }}</td>
                        <td>{{ $flowers->price }}$</td>
                    </tr>
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
