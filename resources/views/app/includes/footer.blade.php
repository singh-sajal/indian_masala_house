<footer>
    <div class="container">
        <div class="footer-style-one bg-dark text-light">

            <div class="row">
                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item mt-50">
                    <div class="f-item about">

                        <h4 class="widget-title">About Us</h4>
                        <p>
                            Continued at zealously necessary is Surrounded sir motionless she end literature. Gay
                            direction neglected.
                        </p>

                        {{-- <ul class="footer-social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> --}}

                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
                    <div class="f-item link">
                        <h4 class="widget-title">Explore</h4>
                        <ul>
                            <li>
                                <a href="about-us.html">Compnay Profile</a>
                            </li>
                            <li>
                                <a href="about-us.html">About</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Help Center</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Career</a>
                            </li>
                            <li>
                                <a href="about-us.html">Features</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item  mt-50">
                    <div class="f-item contact">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    175 10h Street, Office 375 Berlin, De 21562
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <a href="tel:2151234567">+123 34598768</a> <br> <a href="tel:2151234567">+554
                                        34598734</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <a href="mailto:name@email.com">food@restan.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item mt-50">
                    <h4 class="widget-title">Social Media</h4>
                    <p>
                        Connect and follow us on our social media
                    </p>
                     <ul class="footer-social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                </div>
                <!-- End Singel Item -->


            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom text-light">
        <div class="footer-bottom-shape">
            <img src="{{ asset('assets/img/shape/9.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-logo">
                        {{-- <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo"> --}}
                        <img src="{{ asset('assets/img/icon.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <p>
                        © Copyright {{ date('Y') }} Restan. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
