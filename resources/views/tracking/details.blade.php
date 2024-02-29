@extends('welcome')

@section('title')
    Tracking Details
@endsection

@section('header')
    <h1 class="text-white display-3 animate__animated animate__fadeInDown">Tracking Details</h1>
    <div class="d-inline-flex align-items-center text-white animate__animated animate__fadeInRight">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Tracking Details</p>
    </div>
@endsection

@section('content')
    <div id="tracking-details" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($trackingDetails)
                    <div class="card animate__animated animate__zoomIn">
                        <div class="card-body">
                            <h3 class="card-title">Tracking Information</h3>
                            <p><strong>Product Number:</strong> {{ $trackingDetails->product_number }}</p>
                            <p><strong>Current Location:</strong> {{ $trackingDetails->current_location }}</p>
                            <p><strong>Status:</strong> {{ $trackingDetails->status }}</p>
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning animate__animated animate__shakeX" role="alert">
                        No tracking details found.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for animations */
        #tracking-details .card {
            opacity: 0; /* Initially hide the card */
        }

        /* Add more custom styles here if needed */
    </style>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to show tracking details with animation
            function showTrackingDetails() {
                $('#tracking-details .card').addClass('animate__animated animate__fadeInUp');
                $('#tracking-details .card').css('opacity', '1');
            }

            // Call the function when the document is ready
            showTrackingDetails();

            // Add a click event listener for the "Track & Trace" button
            $('.btn-primary').click(function() {
                // Add loading animation while waiting for response
                $('.btn-primary').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');

                // Simulate delay for demonstration (replace with actual AJAX call)
                setTimeout(function() {
                    // Remove loading animation and restore button text
                    $('.btn-primary').html('Track & Trace');
                    showTrackingDetails(); // Show tracking details after the delay
                }, 2000); // 2 seconds delay for demonstration
            });
        });
    </script>
@endsection
