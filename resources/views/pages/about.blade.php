@extends('welcome')

@section('title')
    About
@endsection

@section('header')
    <h1 class="text-white display-3">About</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a href="{{route('home')}}" class="text-white">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">About</p>
    </div>
@endsection

@section('content')

    @include('home.about')

    @include('home.features')

    @include('home.team')
@endsection
