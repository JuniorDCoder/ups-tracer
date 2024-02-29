@extends('welcome')

@section('title')
    Services
@endsection

@section('header')
    <h1 class="text-white display-3">Services</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Services</p>
    </div>
@endsection

@section('content')

    @include('home.services')

    @include('home.quote')

    @include('home.testimonial')

@endsection
