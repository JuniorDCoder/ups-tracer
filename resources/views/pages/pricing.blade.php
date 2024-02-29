@extends('welcome')

@section('title')
    Pricing
@endsection

@section('header')
    <h1 class="text-white display-3">Pricing</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Pricing</p>
    </div>
@endsection

@section('content')

     <!-- Pricing Plan Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Pricing Plan</h6>
                <h1 class="mb-4">Affordable Pricing Packages</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Basic</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Track & Trace</p>
                            <p>Basic Reporting</p>
                            <p>Email Notifications</p>
                            <p>Customer Support</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Premium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Advanced Track & Trace</p>
                            <p>Detailed Reporting</p>
                            <p>Email & SMS Notifications</p>
                            <p>Premium Customer Support</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Business</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Complete Track & Trace</p>
                            <p>Comprehensive Reporting</p>
                            <p>Email, SMS & Phone Notifications</p>
                            <p>24/7 Customer Support</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    @include('home.testimonial')

@endsection
