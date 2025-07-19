@extends('app.app')
@section('title', 'Contact Us')
@section('css')
@endsection
@section('breadcrumb')
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light"
        style="background-image: url(assets/img/shape/5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Start Contact Us -->
    <div class="contact-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact-style-one-info">
                        <ul>
                            <li class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/phone.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="#">+4733378901</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms"
                                style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/placeholder.png') }}" alt="Icon">
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>55 Main Street, The Grand Avenue 2nd Block, New York City</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms"
                                style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/email.png') }}" alt="Icon">
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@restan.com.com">info@restan.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1">
                    <div class="contact-form-style-one">
                        <div class="heading text-center">
                            <h5 class="sub-title">Keep in touch</h5>
                            <h2 class="heading">Send us a Massage</h2>
                        </div>
                        <form id="whatsappContactForm" onsubmit="sendToWhatsApp(); return false;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Your Message *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Map -->
    <div class="maps-area overflow-hidden">
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
        </div>
    </div>
    <!-- End Map -->

    <!-- Start Opening Hours -->
    <div class="opening-hours-area default-padding overflow-hidden">
        <div class="container">
            <div class="opening-hour-items">
                <h2 class="text-fixed">Restan</h2>
                <div class="shape">
                    <img src="{{ asset('assets/img/shape/4.png') }}" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="opening-hours-thumb video-bg-live">
                            <img src="{{ asset('assets/img/banner/7.jpg') }}" alt="Image Not Found">
                            <div class="player"
                                data-property="{videoURL:'0Fs-4GiNxQ8',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:654, opacity:1, quality:'default'}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="opening-hours-info">
                            <h3>Opening Hours</h3>
                            <p>
                                A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar
                                opens in the center..
                            </p>
                            <ul class="opening-hours-table">
                                <li>
                                    <h6>Sunday to Tuesday:</h6> <span>10:00 - 09:00</span>
                                </li>
                                <li>
                                    <h6>Wednesday to Thursday:</h6> <span>11:30 - 10:30</span>
                                </li>
                                <li>
                                    <h6>Friday & Saturday:</h6> <span>10:30 - 12:00</span>
                                </li>
                            </ul>
                            <div class="call-to-action">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/6.png') }}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <p>Call Anytime</p>
                                    <h4><a href="#">+964733-378901</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Opening Hours -->
@endsection


@section('javascript')
    <script>
        function sendToWhatsApp() {
            const whatsappNumber = "919897634106"; // <-- Replace with your business number

            // Get form values
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const comments = document.getElementById("comments").value.trim();

            // Basic validation
            if (!name || !email || !phone || !comments) {
                alert("Please fill out all fields before sending to WhatsApp.");
                return;
            }

            // Format the message
            const message = `New Inquiry from Website:%0A
Name: ${name}%0A
Email: ${email}%0A
Phone: ${phone}%0A
Message: ${comments}`;

            // Open WhatsApp
            const url = `https://wa.me/${whatsappNumber}?text=${message}`;
            window.open(url, "_blank").focus();
        }
    </script>
@endsection
