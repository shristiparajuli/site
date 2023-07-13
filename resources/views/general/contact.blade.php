@extends('layouts.app')
@section('content')
<div class="page-title-area bg-13">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact us</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>

<section class="main-contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-wrap ptb-100">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h2>Write us</h2>
                        </div>

                        <form action = "{{ route('contacts.store') }}" method="POST" id="contactForm"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <button id="submitButton" type="button" onclick="submitForm()" class="default-btn btn-two">
                                        Send Message
                                    </button>
                                    {{-- <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-info ptb-100">
                    <h3>Our contact details</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                    <ul class="address">
                        <li class="location">
                            <i class="bx bxs-location-plus"></i>
                            <span>Address</span>
                            6890 Blvd, The Bronx, NY 1058 New York, USA
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <span>Phone</span>
                            <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                            <a href="tel:+1-(514)-312-6688">+1 (514) 312-6688</a>
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <span>Email</span>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#1078757c7c7f50737f7e6a797f3e737f7d"><span class="__cf_email__" data-cfemail="442c2128282b04272b2a3e2d2b6a272b29">[email&#160;protected]</span></a>
                            <a href="#">skype: Example</a>
                        </li>
                    </ul>

                    <div class="sidebar-follow-us">
                        <h3>Follow us:</h3>
    
                        <ul class="social-wrap">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1595487039539!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->

@endsection