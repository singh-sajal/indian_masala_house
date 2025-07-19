@extends('app.app')
@section('title', 'Food Menu')
@section('css')
@endsection
@section('breadcrumb')
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light"
        style="background-image: url({{ asset('assets/img/shape/5.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Food Menu</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Menu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Start Foot Menu
            ============================================= -->
    <div class="food-menus-area default-padding">

        <div class="container">

            <!-- Tab Single Item -->
            <div class="food-menus-item">
                <div class="row">
                    <div class="col-lg-5 thumb" style="background: url({{ asset('assets/img/banner/10.jpg') }});">
                        <div class="discount-badge">
                            <strong>Menu</strong> Breakfast
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="info">
                            <ul class="meal-type">
                                <li>Half</li>
                                <li>Full</li>
                            </ul>
                            <ul class="meal-items">
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/1.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Chicken Alfredo</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$20</span>
                                                <span>$30</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/2.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Fish & Chips</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$36</span>
                                                <span>$55</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Atlantic / chips / salad /tartare
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/3.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Ebony Fillet Steak</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$44</span>
                                                <span>$88</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Truffle mash / pepper sauce.
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/4.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Chicken Alfredo</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$20</span>
                                                <span>$30</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Single Item -->

            <!-- Tab Single Item -->
            <div class="food-menus-item">
                <div class="row">
                    <div class="col-lg-5 thumb order-lg-last" style="background: url({{ asset('assets/img/banner/11.jpg') }});">
                        <div class="discount-badge">
                            <strong>Menu</strong> Lunch
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="info">
                            <ul class="meal-type">
                                <li>Half</li>
                                <li>Full</li>
                            </ul>
                            <ul class="meal-items">
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/1.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Chicken Alfredo</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$20</span>
                                                <span>$30</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/2.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Fish & Chips</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$36</span>
                                                <span>$55</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Atlantic / chips / salad /tartare
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/3.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Ebony Fillet Steak</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$44</span>
                                                <span>$88</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Truffle mash / pepper sauce.
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/4.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Chicken Alfredo</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$20</span>
                                                <span>$30</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Single Item -->


        </div>
    </div>

    <!-- Start Delivery Process
            ============================================= -->
    <div class="deliverya-process-area shadow dark default-padding bg-dark text-light bg-cover"
        style="background-image: url({{ asset('assets/img/banner/9.jpg') }});">
        <div class="shape">
            <img src="{{ asset('assets/img/illustration/11.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-8">
                    <div class="delivary-projcess">
                        <h2>30 Minutes Delivery!</h2>
                        <p>
                            A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar opens
                            in the center of Florence. The only bar inspired by the 1960s, it will give you a experience
                            that you’ll have a hard time forgetting.
                        </p>
                        <a class="btn btn-theme btn-md animation mt-10" href="#">Order Now <i
                                class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delivery Process -->

    <!-- Start Food Type
            ============================================= -->
    <div class="food-type-area default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 pr-50 pr-md-15 pr-xs-15 mb-md-50 mb-xs-30">
                    <div class="info">
                        <div class="heading text-center">
                            <h4 class="sub-title">Fresh from ocean</h4>
                            <h2 class="title">Sea Food</h2>
                        </div>
                        <ul class="meal-type">
                            <li>Half</li>
                            <li>Full</li>
                        </ul>
                        <ul class="meal-items">
                            <li>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/food/9.jpg') }}" alt="Image Not Found">
                                </div>
                                <div class="content">
                                    <div class="top">
                                        <div class="title">
                                            <h4><a href="shop-single.html">Salmon Fry</a></h4>
                                        </div>
                                        <div class="price">
                                            <span>$40</span>
                                            <span>$70</span>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <p>
                                                Ricotta / goat cheese / beetroot
                                            </p>
                                        </div>
                                        <div class="right">
                                            <p>
                                                Extra Free Juice.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/food/10.jpg') }}" alt="Image Not Found">
                                </div>
                                <div class="content">
                                    <div class="top">
                                        <div class="title">
                                            <h4><a href="shop-single.html">Pangasius or Basa</a></h4>
                                        </div>
                                        <div class="price">
                                            <span>$15</span>
                                            <span>$55</span>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <p>
                                                Atlantic / chips / salad /tartare
                                            </p>
                                        </div>
                                        <div class="right">
                                            <p>
                                                Extra Free Juice.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/food/11.jpg') }}" alt="Image Not Found">
                                </div>
                                <div class="content">
                                    <div class="top">
                                        <div class="title">
                                            <h4><a href="shop-single.html">Clams</a></h4>
                                        </div>
                                        <div class="price">
                                            <span>$45</span>
                                            <span>$78</span>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <p>
                                                Truffle mash / pepper sauce.
                                            </p>
                                        </div>
                                        <div class="right">
                                            <p>
                                                Extra Free Juice.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/food/12.jpg') }}" alt="Image Not Found">
                                </div>
                                <div class="content">
                                    <div class="top">
                                        <div class="title">
                                            <h4><a href="shop-single.html">Red Crab</a></h4>
                                        </div>
                                        <div class="price">
                                            <span>$20</span>
                                            <span>$30</span>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <p>
                                                Ricotta / goat cheese / beetroot
                                            </p>
                                        </div>
                                        <div class="right">
                                            <p>
                                                Extra Free Juice.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 pl-50 pl-md-15 pl-xs-15">
                    <div class="meal-thumb-less">
                        <div class="info">
                            <div class="heading text-center">
                                <h4 class="sub-title">Drins & Wine</h4>
                                <h2 class="title">Beverage</h2>
                            </div>
                            <ul class="meal-type">
                                <li>Half</li>
                                <li>Full</li>
                            </ul>
                            <ul class="meal-items">
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/13.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Wine</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$34</span>
                                                <span>$66</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/14.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Coffee</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$36</span>
                                                <span>$55</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Atlantic / chips / salad /tartare
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/15.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Hot chocolate</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$67</span>
                                                <span>$88</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Truffle mash / pepper sauce.
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/img/food/16.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="content">
                                        <div class="top">
                                            <div class="title">
                                                <h4><a href="shop-single.html">Milk Shake</a></h4>
                                            </div>
                                            <div class="price">
                                                <span>$14</span>
                                                <span>$56</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <p>
                                                    Ricotta / goat cheese / beetroot
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p>
                                                    Extra Free Juice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Food Type -->

    <!-- Start Testimonial
            ============================================= -->
    <div class="testimonial-area bg-gray default-padding">

        <div class="testimonial-shape">
            <img src="{{ asset('assets/img/shape/5.png') }}" alt="Image Not Found">
            <img src="{{ asset('assets/img/shape/7.png') }}" alt="Image Not Found">
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Happy Customers</h4>
                        <h2 class="title">Our Customers Feedback</h2>
                    </div>
                </div>
            </div>

            <div class="row align-center ">
                <div class="col-lg-5">
                    <div class="testimonial-thumb">
                        <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Image Not Found">
                        <img src="{{ asset('assets/img/team/5.jpg') }}" alt="Image Not Found">
                        <img src="{{ asset('assets/img/team/6.jpg') }}" alt="Image Not Found">
                        <img src="{{ asset('assets/img/team/7.jpg') }}" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="testimonial-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">

                                    <div class="item">
                                        <div class="content">
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(5/5)</span>
                                            </div>
                                            <h2>The best food ever</h2>
                                            <p>
                                                “Targeting consultation discover apartments. ndulgence off under folly death
                                                wrote cause her way spite. Plan upon yet way get cold spot its week. Almost
                                                do am or limits hearts. Resolve parties but why she shewing.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <i class="flaticon-quote"></i>
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="item">
                                        <div class="content">
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(5/5)</span>
                                            </div>
                                            <h2>Awesome and delicious food</h2>
                                            <p>
                                                Breaking consultation discover apartments. ndulgence off under folly death
                                                wrote cause her way spite. Plan upon yet way get cold spot its week. Almost
                                                do am or limits hearts. Resolve parties but why she shewing.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <i class="flaticon-quote"></i>
                                            <div class="info">
                                                <h4>Anthom Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Reservation Area
            ============================================= -->
    <div class="reservation-area default-padding-top mb-120 mb-xs-60 bg-cover shadow dark"
        style="background-image: url({{ asset('assets/img/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="reservation-info text-light">
                        <h4 class="sub-heading">Reservation</h4>
                        <h2 class="title">Reservation Your Favorite Private Table</h2>
                        <p>
                            A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar opens
                            in the center of Florence. The only bar inspired by the 1960s, it will give you a experience
                            that you’ll have a hard time forgetting.
                        </p>
                        <div class="reservation-time">
                            <ul>
                                <li>
                                    <h4>Launch Menu</h4>
                                    <p>
                                        30+ items
                                    </p>
                                </li>
                                <li>
                                    <h4>Dinner Menu</h4>
                                    <p>
                                        50+ items
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="reservation-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone"
                                            placeholder="+4733378901" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Person</label>
                                        <select id="subject">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="4">3 Person</option>
                                            <option value="5">4 Person</option>
                                            <option value="6">5 Person</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group date date-picker-one">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <select id="time">
                                            <option value="1">10:00 AM</option>
                                            <option value="1">11:00 AM</option>
                                            <option value="1">12:00 AM</option>
                                            <option value="1">1:00 AM</option>
                                            <option value="1">2:00 AM</option>
                                            <option value="1">3:00 AM</option>
                                        </select>
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
            </div>
        </div>
    </div>
    <!-- End Reservation Area -->


@endsection

@section('javascript')
@endsection
