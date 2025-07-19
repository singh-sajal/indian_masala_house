@extends('app.app')
@section('title', 'Home')
@section('css')
@endsection

@section('content')
    <!-- Start Banner Area
                        ============================================= -->
    <div class="banner-style-four-area text-light text-center bg-cover"
        style="background-image: url({{ asset('assets/img/banner/14.jpg') }});">
        <div class="banner-style-four-content shadow dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <h2 style="font-size: 70px !important;">Indian Masala House</h2>

                        <h2>The Great Indian Masala</h2>

                        <div class="curve-text">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                <text>
                                    <textPath href="#textPath">Best Food Since - 1865</textPath>
                                </text>
                            </svg>
                            <a href="https://www.youtube.com/watch?v=-4ahrKWt05I" class="popup-youtube"><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Top Feature
                        ============================================= -->
    <div class="feature-style-three-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-80 pr-md-15 pr-xs-15">
                    <div class="reservation-form light">
                        <i class="fas fa-utensils"></i>
                        <h3>Book a table</h3>
                        <form id="whatsappForm" onsubmit="sendToWhatsApp(); return false;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{-- <select id="subject">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="3">3 Person</option>
                                            <option value="4">4 Person</option>
                                            <option value="5">5 Person</option>
                                        </select> --}}
                                        <input class="form-control" id="no_of_person" name="no_of_person"
                                            placeholder="Number of Person" type="text">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group date date-picker-one">
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{-- <select id="time">
                                            <option value="1">10:00 AM</option>
                                            <option value="1">11:00 AM</option>
                                            <option value="1">12:00 AM</option>
                                            <option value="1">1:00 AM</option>
                                            <option value="1">2:00 AM</option>
                                            <option value="1">3:00 AM</option>
                                        </select> --}}
                                        <input class="form-control" id="time" name="time" placeholder="Time"
                                            type="text">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Book A Table
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="relative default-padding-top">
                        <!-- Navigation -->
                        <div class="food-swiper-nav">
                            <div class="food-cat-prev"></div>
                            <div class="food-cat-next"></div>
                        </div>

                        <div class="food-cat-items">
                            <h2 class="flex-title mb-35"><img src="{{ asset('assets/img/shape/fire.png') }}"
                                    alt="Image Not Found">
                                Our Popular category</h2>
                            <div class="food-cat-carousel swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <a href="shop.html">
                                            <img src="{{ asset('assets/img/menu/25.jpg') }}" alt="Image Not Found">
                                            <div class="overlay">
                                                <span>Main Dishes</span>
                                                <h5>Chicken Alfredo</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <a href="shop.html">
                                            <img src="{{ asset('assets/img/menu/26.jpg') }}" alt="Image Not Found">
                                            <div class="overlay">
                                                <span>Desserts</span>
                                                <h5>Cheesecakes</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <a href="shop.html">
                                            <img src="{{ asset('assets/img/menu/27.jpg') }}" alt="Image Not Found">
                                            <div class="overlay">
                                                <span>Sea Food</span>
                                                <h5>Salmon Fry</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <a href="shop.html">
                                            <img src="{{ asset('assets/img/menu/28.jpg') }}" alt="Image Not Found">
                                            <div class="overlay">
                                                <span>Beverage</span>
                                                <h5>Hot chocolate</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Single Item -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Feature -->

    <!-- Start Why Choose us
                        ============================================= -->
    <div class="choose-us-style-one-one-area default-padding">
        <div class="container">
            <div class="choose-us-style-one-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp">
                            <img src="{{ asset('assets/img/icon/13.png') }}" alt="Icon">
                            <h4>Quality Foods</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp" data-delay="200ms">
                            <img src="{{ asset('assets/img/icon/14.png') }}" alt="Icon">
                            <h4>Fast Delivery</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp" data-delay="400ms">
                            <img src="{{ asset('assets/img/icon/15.png') }}" alt="Icon">
                            <h4>Delicious Recipes</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- Start Big Deal
                        ============================================= -->
    <div class="big-deal-area">
        <div class="container">
            <div class="deal-style-one-items" style="background-image: url({{ asset('assets/img/shape/4.jpg') }});">
                <div class="row align-center">
                    <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                        <div class="deal-thumb">
                            <img src="{{ asset('assets/img/illustration/1.png') }}" alt="Image Not Found">
                            <img src="{{ asset('assets/img/illustration/15.png') }}" alt="Image Not Found">
                            <img src="{{ asset('assets/img/illustration/12.png') }}" alt="Image Not Found">
                            <div class="offer-badge animate" data-animate="zoomIn">
                                Save <strong>55%</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="deal-info">
                            <h4 class="sub-heading">Today Special Offer</h4>
                            <h2>Explore Irresistible Promotions!</h2>
                            <p>
                                Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant
                                stuff. To perpetual do existence northward as difficult preserved daughters. Continued
                                at up to zealously necessary.
                            </p>
                            <a class="btn btn-theme circle btn-md animation" href="shop.html">Order Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Big Deal -->

    <!-- Start Foot Menu
                        ============================================= -->
    <div class="food-menu-style-three-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Food Menu</h4>
                        <h2 class="title">Our Specials Menu</h2>
                    </div>
                </div>
            </div>
            <div class="food-menu-three-two-items">
                <div class="row">
                    <div class="col-lg-12 text-center">

                        <div class="nav nav-tabs food-menu-nav style-three" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1"
                                type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                Main Dishes
                            </button>
                            <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2"
                                type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                Desserts
                            </button>
                            <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3"
                                type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                Sea Food
                            </button>
                            <button class="nav-link" id="nav-id-4" data-bs-toggle="tab" data-bs-target="#tab4"
                                type="button" role="tab" aria-controls="tab4" aria-selected="false">
                                Biriyani
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content food-style-two-content" id="nav-tabContent">

                            <!-- Tab Single Item -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="nav-id-1">
                                <div class="row">
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/1.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.9(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$35.00</del> $34.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Braised Chicken Legs</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/2.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.2(3.1K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$25.00</del> $18.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Bone Steak</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/3.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(6.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$18.00</del> $12.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Fish Tacos with Chipotle Crema</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/4.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>5.0(3.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$38.00</del> $22.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Broken Lasagna & Parmesan</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/5.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.6(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$24.00</del> $19.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Seared Scallops with Butter</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/6.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(5.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$40.00</del> $36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Double-Stack Mushroom</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                            <!-- Tab Single Item -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                                <div class="row">
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/7.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.9(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$35.00</del> $34.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Vanilla Cupcakes</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/8.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.2(3.1K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$25.00</del> $18.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Chocolate brownie</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/9.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(6.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$18.00</del> $12.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Croissants Sweet Rolls Muffin</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/10.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>5.0(3.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$38.00</del> $22.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">White Chocolate Cheesecake</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/11.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.6(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$24.00</del> $19.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Lemon Meringue Pie</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/12.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(5.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$40.00</del> $36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Mixed Berry Mousse</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                            <!-- Tab Single Item -->
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                                <div class="row">
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/13.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.9(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$35.00</del> $34.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Salmon Fry</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/14.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.2(3.1K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$25.00</del> $18.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Pangasius or Basa</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/15.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(6.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$18.00</del> $12.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Spicy Stuffed Clams</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/16.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>5.0(3.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$38.00</del> $22.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Special Cajun Red Crab</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/17.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.6(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$24.00</del> $19.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Crustaceans such as lobsters</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/18.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(5.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$40.00</del> $36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">The cephalopod mollusks</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                            <!-- Tab Single Item -->
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="nav-id-4">
                                <div class="row">
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/19.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.9(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$35.00</del> $34.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Cabernet Sauvignon</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/20.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.2(3.1K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$25.00</del> $18.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Americano Cofee</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/21.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(6.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$18.00</del> $12.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Hot chocolate Shake</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/22.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>5.0(3.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$38.00</del> $22.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Watermelon Juice</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/23.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.6(5.7K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$24.00</del> $19.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Seared Scallops with Butter</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/menu/24.jpg') }}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.8(5.5K)</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><del>$40.00</del> $36.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="shop-single.html">Soft Drinks</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="shop-single.html" class="cart-btn-border"><i
                                                        class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                            <!-- End Tab Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Menu -->

    <!-- Start Download App
                        ============================================= -->
    {{-- <div class="download-app-area default-padding-top">
        <div class="container">
            <div class="download-app-items bg-dark text-light"
                style="background-image: url({{ asset('assets/img/shape/21.png') }});">
                <div class="row align-center">

                    <div class="col-lg-5">
                        <div class="download-app-thumb animate" data-animate="fadeInUp">
                            <img src="{{ asset('assets/img/illustration/16.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <h2 class="title">Are you Ready to Start your online Order?</h2>
                        <p>
                            Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her
                            way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve
                            parties but why she shewing. She sang know now
                        </p>
                        <div class="d-flex">
                            <a class="btn btn-light circle btn-md animation" href="#"><i
                                    class="fab fa-app-store"></i> App Store</a>
                            <a class="btn btn-theme circle btn-md animation" href="#"><i
                                    class="fab fa-google-play"></i> Play Store</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Download App -->

    <!-- Start Opening Hours
                        ============================================= -->
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
                        <div class="opening-hours-info animate" data-animate="fadeInLeft">
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

    <!-- Start Chef Area
                        ============================================= -->
    <div class="chef-area default-padding bg-gray text-center">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">MASTER CHEFS</h4>
                        <h2 class="title">Meet Our Special Chefs</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6">
                    <div class="chef-style-one">
                        <div class="chef-thumb">
                            <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Image Not Found">
                            <div class="info">
                                <h4><a href="chef-details.html">Alexander Petllo</a></h4>
                                <span>Assistant Chef</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6">
                    <div class="chef-style-one">
                        <div class="chef-thumb">
                            <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Image Not Found">
                            <div class="info">
                                <h4><a href="chef-details.html">Mendia Juxef</a></h4>
                                <span>Burger King</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6">
                    <div class="chef-style-one">
                        <div class="chef-thumb">
                            <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Image Not Found">
                            <div class="info">
                                <h4><a href="chef-details.html">Petro William</a></h4>
                                <span>Main Chef</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Chef Area -->

    <!-- Start Blog
                        ============================================= -->
    {{-- <div class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">News & Blog</h4>
                        <h2 class="title">Our Latest News & Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-6">
                    <div class="home-blog-style-one-item">
                        <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Image not Found">
                        <div class="content">
                            <div class="info">
                                <div class="date"><strong>24</strong> Dec</div>
                                <ul class="blog-meta">
                                    <li>
                                        By <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        <a href="#">Burger</a> ,
                                        <a href="#">Food</a>
                                    </li>
                                </ul>
                                <h4 class="title">
                                    <a href="blog-single-with-sidebar.html">Picked up a Brussels burger Sprouts with
                                        ham</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6">
                    <div class="home-blog-style-one-item">
                        <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="Image not Found">
                        <div class="content">
                            <div class="info">
                                <div class="date"><strong>18</strong> Nov</div>
                                <ul class="blog-meta">
                                    <li>
                                        By <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        <a href="#">Pizza</a> ,
                                        <a href="#">Food</a>
                                    </li>
                                </ul>
                                <h4 class="title">
                                    <a href="blog-single-with-sidebar.html">This prefabricated passive house is highly
                                        sustainable</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div> --}}
    <!-- End Blog -->
@endsection

@section('javascript')
    <script>
        function sendToWhatsApp() {
            // Your business WhatsApp number (include country code, no + or spaces)
            const phoneNumber = "919897634106"; // Replace with your WhatsApp number

            // Get form values
            const userPhone = document.getElementById("phone").value;
            const noOfPerson = document.getElementById("no_of_person").value;
            const date = document.getElementById("date").value;
            const time = document.getElementById("time").value;

            // Construct the message
            const message = `New Table Booking Request:%0A
Phone: ${userPhone}%0A
Number of Persons: ${noOfPerson}%0A
Date: ${date}%0A
Time: ${time}`;

            // Open WhatsApp chat
            const url = `https://wa.me/${phoneNumber}?text=${message}`;
            window.open(url, '_blank').focus();
        }
    </script>

@endsection
