@extends('welcome')

@section('title')
    Contact
@endsection

@section('header')
    <h1 class="text-white display-3">Contact</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="{{route('home')}}">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Contact</p>
    </div>
@endsection

@section('content')
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <div class="bg-primary text-dark text-center p-4">
                    <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mr-2"></i>123 Street, New York, USA</h4>
                </div>
                <iframe style="width: 100%; height: 470px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">Contact Us</h6>
                <h1 class="mb-4">Contact For Any Queries</h1>
                <div class="contact-form bg-secondary" style="padding: 30px;">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" method="POST" action="{{ route('submit.form') }}" novalidate="novalidate">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" name="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="subject" name="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger">{{ $errors->first('subject') }}</p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" name="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger">{{ $errors->first('message') }}</p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
