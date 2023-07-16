@extends('layouts.main-layout')

@section('title')
    home
@endsection

@section('content')

    <div class="text-center px-0 mx-0">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" width="100%" class="mx-0 px-0">
        <div class="container-fluid bg-dark">
            <div class="row gy-4">
            <div class="comics-list py-5">
                    <div class="comic-container">
                        <div class="info-box">
                            <h4>Current series</h4>
                        </div>
                @foreach ($fumetti as $fumetto)
                <a href="{{ route('about') }}" class="text-decoration-none">
                    <div class="card rounded px-0">
                        <img src="{{ $fumetto['thumb'] }}" alt="">
                        <h5 class="mt-2"> {{ $fumetto['title'] }}</h5>
                    </div>
                </a>
                @endforeach

                                        <div class="button button-solid">Load more</div>
                    </div>
                </div>

               



            </div>
        </div>

        <div class="service-bar py-4">
            <div class="container my-4">
                <div class="justify-content-center d-flex justify-content-around flex-wrap">
                    @foreach ($services as $service)
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ $service['image'] }}" alt="">
                        <h5>{{ $service['name'] }}</h5>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
