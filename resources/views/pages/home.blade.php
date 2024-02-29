@extends('welcome')

@section('title')

@endsection

@section('content')



    <!-- About Start -->
    @include('home.about')
    <!-- About End -->


    <!--  Quote Request Start -->
    @include('home.quote')
    <!-- Quote Request Start -->


    <!-- Services Start -->
    @include('home.services')
    <!-- Services End -->


    <!-- Features Start -->
    @include('home.features')
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    @include('home.pricing')
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    @include('home.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('home.testimonial')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @include('home.blog')
    <!-- Blog End -->



@endsection
