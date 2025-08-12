@extends('layouts.app')
@section('title', __('Transportation Details') . ' | ')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Transportation Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Transportation Details</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2">
            <div class="tour-details-area">

                <div class="tour-details-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Details Heading -->
                                <div class="details-heading pt-0">
                                    <div class="d-flex flex-column">
                                        <h4 class="title text-capitalize">{{ $transportation->title }}</h4>
                                        <div class="d-flex flex-wrap align-items-center gap-30 mt-16">
                                            <div class="location">
                                                <i class="ri-map-pin-line"></i>
                                                <div class="name">{{ $transportation->location }}</div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="d-flex align-items-center flex-wrap gap-20">
                                                <div class="count">
                                                    <i class="ri-time-line"></i>
                                                    <p class="pera">{{ $transportation->duration }}</p>
                                                </div>
                                                <div class="count">
                                                    <i class="ri-user-line"></i>
                                                    <p class="pera">{{ $transportation->number_of_individuals }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-review">
                                        <div class="d-flex gap-10 align-items-end">
                                            <p class="light-pera">From</p>
                                            <p class="pera">৳{{ $transportation->price }}</p>
                                        </div>
                                        <div class="rating">
                                            <i class="ri-star-s-fill"></i>
                                            <p class="pera">4.7 (20 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Details Heading -->

                                <!-- Service Feature -->
                                <ul class="service-feature py-20">
                                    <li class="single"><i class="pe-7s-car"></i>120 Trip</li>
                                    <li class="single"><i class="icon_set_1_icon-13"></i>5 seat</li>
                                    <li class="single"><i class="icon_set_1_icon-29"></i>6 Passengers</li>
                                    <li class="single"><i class="icon_set_1_icon-33"></i>Large Baggage</li>
                                    <li class="single"><i class="icon_set_1_icon-6"></i>Hotel Pick up</li>
                                    <li class="single"><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                                    <li class="single"><i class="icon_set_1_icon-82"></i>144 Likes</li>
                                    <li class="single"><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                                </ul>
                                <!-- / Service Feature -->

                                <!-- Details Banner Slider -->
                                <div class="tour-details-banner">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="swiper tourSwiper-active radius-8">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/transportation/' . $transportation->image_primary) }}"
                                                            alt="image_primary">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/transportation/' . $transportation->image_secondary_1) }}"
                                                            alt="image_secondary_1">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/transportation/' . $transportation->image_secondary_2) }}"
                                                            alt="image_secondary_2">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/transportation/' . $transportation->image_secondary_3) }}"
                                                            alt="image_secondary_3">
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                                                <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Slider-->

                                <div class="mt-30">
                                    <div class="row g-4">
                                        <!-- Left content -->
                                        <div class="col-xl-8 col-lg-7">
                                            <!-- Description tour -->
                                            <div class="tour-details-content">
                                                <h4 class="title text-capitalize">Transportation Details</h4>
                                                <p class="pera">{{ $transportation->about }}</p>

                                            </div>
                                            <!-- / Description tour -->

                                            <!-- Tour Include Exclude -->
                                            <div class="tour-include-exclude radius-6">
                                                <h5 class="title">Driver's Name</h5>
                                                {{ $transportation->driver_name }}
                                                <h5 class="title">Driver's Contact</h5>
                                                {{ $transportation->driver_contact }}
                                            </div>
                                            <!-- / Tour Include Exclude -->

                                            <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                                                <div class="tag-section">
                                                    <h4 class="title">Tags :</h4>
                                                    <div class="tag-list">
                                                        <div class="tags">
                                                            <a href="javascript:void(0)" class="tag-btn">Travel</a>
                                                        </div>
                                                        <div class="tags">
                                                            <a href="javascript:void(0)" class="tag-btn">Design</a>
                                                        </div>
                                                        <div class="tags">
                                                            <a href="javascript:void(0)" class="tag-btn">Booking</a>
                                                        </div>
                                                        <div class="tags">
                                                            <a href="javascript:void(0)" class="tag-btn">Destination</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="social-section">
                                                    <h4 class="title">Share :</h4>
                                                    <div class="social-list">
                                                        <div class="tags">
                                                            <a href="javascript:void(0)" class="social-btn"><i
                                                                    class="ri-facebook-fill"></i></a>
                                                        </div>
                                                        <div class="socials">
                                                            <a href="javascript:void(0)" class="social-btn"><i
                                                                    class="ri-twitter-fill"></i></a>
                                                        </div>
                                                        <div class="socials">
                                                            <a href="javascript:void(0)" class="social-btn"><i
                                                                    class="ri-linkedin-fill"></i></a>
                                                        </div>
                                                        <div class="socials">
                                                            <a href="javascript:void(0)" class="social-btn"><i
                                                                    class="ri-instagram-line"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Comments -->
                                            <div class="comment-section">
                                                <div class="main-profile">
                                                    <div class="user-info">
                                                        <p class="pera">Chris Jordan is a technical content writer at
                                                            Travello. he’s a tech
                                                            enthusiast, writer
                                                            by day, programmer by night, and always a foodie at heart!</p>
                                                    </div>
                                                </div>
                                                <h4 class="comment-count">( 3 ) Comments</h4>
                                                <!-- Single Comments -->
                                                <div class="main-profile-two d-block pb-15 border-bottom mb-20">
                                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                                        <div class="user d-flex align-items-center flex-wrap gap-15">
                                                            <div class="user-img-sm">
                                                                <img src="/assets/images/news/news-user-1.png"
                                                                    alt="travello">
                                                            </div>
                                                            <h4 class="text-18 font-600">David Warner</h4>
                                                        </div>
                                                        <div class="user-info p-0 border-0">
                                                            <p class="date">Jan 12, 2025</p>
                                                        </div>
                                                    </div>
                                                    <p class="pera">Chris Jordan is a technical content writer at
                                                        Travello. he’s a tech
                                                        enthusiast, writer by day, writer by day, programmer by night, and
                                                        always a programmer by night, and always a foodie at heart!</p>
                                                </div>
                                                <!-- Single Comments -->
                                                <div class="main-profile-two d-block pb-15 border-bottom mb-20">
                                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                                        <div class="user d-flex align-items-center flex-wrap gap-15">
                                                            <div class="user-img-sm">
                                                                <img src="/assets/images/news/news-user-3.png"
                                                                    alt="travello">
                                                            </div>
                                                            <h4 class="text-18 font-600">David Warner</h4>
                                                        </div>
                                                        <div class="user-info p-0 border-0">
                                                            <p class="date">Jan 12, 2025</p>
                                                        </div>
                                                    </div>
                                                    <p class="pera">Chris Jordan is a technical content writer at
                                                        Travello. he’s a tech
                                                        enthusiast, writer by day, writer by day, programmer by night, and
                                                        always a programmer by night, and always a foodie at heart!</p>
                                                </div>
                                                <!-- Single Comments -->
                                                <div class="main-profile-two d-block pb-15 border-bottom mb-20">
                                                    <div class="d-flex justify-content-between align-items-center mb-15">
                                                        <div class="user d-flex align-items-center flex-wrap gap-15">
                                                            <div class="user-img-sm">
                                                                <img src="/assets/images/news/news-user-2.png"
                                                                    alt="travello">
                                                            </div>
                                                            <h4 class="text-18 font-600">David Warner</h4>
                                                        </div>
                                                        <div class="user-info p-0 border-0">
                                                            <p class="date">Jan 12, 2025</p>
                                                        </div>
                                                    </div>
                                                    <p class="pera">Chris Jordan is a technical content writer at
                                                        Travello. he’s a tech
                                                        enthusiast, writer by day, writer by day, programmer by night, and
                                                        always a programmer by night, and always a foodie at heart!</p>
                                                </div>

                                            </div>
                                            <!-- Comments -->

                                            <div class="contact-card mt-40">
                                                <h4 class="contact-heading">Write Your Comment</h4>
                                                <form method="post" class="contact-form">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <input class="custom-form" type="text"
                                                                placeholder="Enter your name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input class="custom-form" type="text"
                                                                placeholder="Enter your email">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input class="custom-form" type="text"
                                                                placeholder="Your Phone">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input class="custom-form" type="text"
                                                                placeholder="Select subject">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" rows="6"
                                                                placeholder="Enter your message..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mt-40">
                                                        <button type="submit" class="send-btn">Post Comment</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                        <!-- Right content -->
                                        <div class="col-xl-4 col-lg-5">
                                            <div class="date-travel-card position-sticky top-0">
                                                <div class="price-review">
                                                    <div class="d-flex gap-10 align-items-end">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">৳{{ $transportation->price }}</p>
                                                    </div>
                                                    <div class="rating">
                                                        <p class="pera">Price varies by group size</p>
                                                    </div>
                                                </div>
                                                <h4 class="heading-card">Select Date and Travelers</h4>
                                                <div class="date-time-dropdown">
                                                    <i class="ri-time-line"></i>
                                                    <p class="date-time-result">Wednesday, Jan 17, 2025</p>
                                                </div>
                                                <div class="dropdown-section position-relative user-picker-dropdown">
                                                    <div class="d-flex gap-12 align-items-center">
                                                        <i class="dropdown-icon ri-user-line"></i>
                                                        <div class="custom-dropdown">
                                                            <h4 class="title">Guests</h4>
                                                            <div class="arrow">
                                                                <i class="ri-arrow-down-s-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-result"></div>
                                                    <div class="user-picker dropdown-shadow">
                                                        <div class="user-category">
                                                            <div class="category-name">
                                                                <h4 class="title">Adults</h4>
                                                                <p class="pera">12years and above</p>
                                                            </div>
                                                            <div class="qty-container">
                                                                <button class="qty-btn-minus mr-1" type="button">
                                                                    <i class="ri-subtract-fill"></i>
                                                                </button>
                                                                <input type="text" name="qty" value="0"
                                                                    class="input-qty input-rounded">
                                                                <button class="qty-btn-plus ml-1" type="button">
                                                                    <i class="ri-add-fill"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="user-category">
                                                            <div class="category-name">
                                                                <h4 class="title">Children</h4>
                                                                <p class="pera">2-11 years</p>
                                                            </div>
                                                            <div class="qty-container">
                                                                <button class="qty-btn-minus mr-1" type="button">
                                                                    <i class="ri-subtract-fill"></i>
                                                                </button>
                                                                <input type="text" name="qty" value="0"
                                                                    class="input-qty input-rounded">
                                                                <button class="qty-btn-plus ml-1" type="button">
                                                                    <i class="ri-add-fill"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="user-category">
                                                            <div class="category-name">
                                                                <h4 class="title">infant</h4>
                                                                <p class="pera">belwo 2 years</p>
                                                            </div>
                                                            <div class="qty-container">
                                                                <button class="qty-btn-minus mr-1" type="button">
                                                                    <i class="ri-subtract-fill"></i>
                                                                </button>
                                                                <input type="text" name="qty" value="0"
                                                                    class="input-qty input-rounded">
                                                                <button class="qty-btn-plus ml-1" type="button">
                                                                    <i class="ri-add-fill"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-section">
                                                            <a href="javascript:void(0)" class="done-btn">Done</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-25">
                                                    <button type="submit" class="btn-primary-outline btn-xl w-100">Check
                                                        Availability</button>
                                                </div>

                                                <!-- Total Pricing -->
                                                <div class="card mb-10 border-0">
                                                    <ul class="listing border-bottom pb-6 mb-12">
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">Sub
                                                                Total</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                $170.15</p>
                                                        </li>
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">Vat
                                                                Tax</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                $05.00</p>
                                                        </li>
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">
                                                                Adults</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                04</p>
                                                        </li>
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">
                                                                Children</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                01</p>
                                                        </li>
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">Fresh
                                                                Water</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                $10</p>
                                                        </li>
                                                        <li
                                                            class="single-list d-flex justify-content-between align-items-center flex-wrap gap-10 mb-10">
                                                            <p class="text-16 text-capitalize text-primary-paragraph">
                                                                Dinner</p>
                                                            <p
                                                                class="text-16 font-600 text-capitalize text-primary-paragraph">
                                                                $100.15</p>
                                                        </li>
                                                    </ul>
                                                    <!-- / Total Pricing -->

                                                    <!-- Total -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center flex-wrap gap-10 mb-30">
                                                        <p class="text-18 text-capitalize text-primary font-700">Total</p>
                                                        <p class="text-18 text-capitalize text-primary font-700">$425</p>
                                                    </div>
                                                    <div>
                                                        <button href="" type="submit"
                                                            class="btn-primary-fill btn-xl w-100">add to card</a>
                                                    </div>
                                                </div>

                                                <div class="footer bg-transparent">
                                                    <h4 class="title">Free Cancellation</h4>
                                                    <p class="pera">Up to 24 hours in advance</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--/ End-of Destination -->
    </main>
@endsection
