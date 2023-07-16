@extends('layouts.main-layout')

@section('title')
    about
@endsection

@section('content')

    <div class="text-center">
        <h1>{{ $fumetti[0]['title'] }}</h1>
        <a href="{{ route('home') }}" class="text-decoration-none">HOME</a>
    </div>

@endsection
