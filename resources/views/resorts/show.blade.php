@extends('layouts.app')
@section('title', __('Resort Details') . ' | ')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Resort Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Resort Details</a>
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
                                        <h4 class="title text-capitalize">{{ $resort->title }}</h4>
                                        <div class="d-flex flex-wrap align-items-center gap-30 mt-16">
                                            <div class="location">
                                                <i class="ri-map-pin-line"></i>
                                                <div class="name">{{ $resort->location->name }}</div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="d-flex align-items-center flex-wrap gap-20">
                                                <div class="count">
                                                    <i class="ri-time-line"></i>
                                                    <p class="pera">{{ $resort->duration }}</p>
                                                </div>
                                                <div class="count">
                                                    <i class="ri-user-line"></i>
                                                    <p class="pera">{{ $resort->number_of_individuals }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-review">
                                        <div class="d-flex gap-10 align-items-end">
                                            <p class="light-pera">From</p>
                                            <p class="pera">৳{{ $resort->price }}</p>
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
                                    <li class="single"><i class="icon_set_1_icon-27"></i>Parking</li>
                                    <li class="single"><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                                    <li class="single"><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                                    <li class="single"><i class="icon_set_2_icon-110"></i>Poll</li>
                                    <li class="single"><i class="icon_set_1_icon-59"></i>Breakfast</li>
                                    <li class="single"><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                                    <li class="single"><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                                    <li class="single"><i class="icon_set_1_icon-23"></i>Private Balcony</li>
                                </ul>
                                <!-- / Service Feature -->

                                <!-- Details Banner Slider -->
                                <div class="tour-details-banner">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="swiper tourSwiper-active radius-8">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/resort/' . $resort->image_primary) }}"
                                                            alt="image_primary">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/resort/' . $resort->image_secondary_1) }}"
                                                            alt="image_secondary_1">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/resort/' . $resort->image_secondary_2) }}"
                                                            alt="image_secondary_2">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/resort/' . $resort->image_secondary_3) }}"
                                                            alt="image_secondary_3">
                                                    </div>
                                                    @if ($resort->image_secondary_4)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_4) }}"
                                                                alt="image_secondary_4">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_5)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_5) }}"
                                                                alt="image_secondary_5">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_6)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_6) }}"
                                                                alt="image_secondary_6">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_7)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_7) }}"
                                                                alt="image_secondary_7">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_8)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_8) }}"
                                                                alt="image_secondary_8">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_9)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_9) }}"
                                                                alt="image_secondary_9">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_10)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_10) }}"
                                                                alt="image_secondary_10">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_11)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_11) }}"
                                                                alt="image_secondary_11">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_12)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_12) }}"
                                                                alt="image_secondary_12">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_13)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_13) }}"
                                                                alt="image_secondary_13">
                                                        </div>
                                                    @endif
                                                    @if ($resort->image_secondary_14)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/resort/' . $resort->image_secondary_14) }}"
                                                                alt="image_secondary_14">
                                                        </div>
                                                    @endif
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
                                                <h4 class="title text-capitalize">Resort facilities</h4>
                                                <p class="pera">{{ $resort->about }}</p>

                                            </div>
                                            <!-- / Description tour -->

                                            {{-- <!-- Single Room -->
                                            <div class="tour-details-content mb-30">
                                                <h4 class="title text-capitalize">Single Room</h4>
                                                <div class="row g-4">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/single_hotel_1.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/single_hotel_2.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/single_hotel_3.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/single_hotel_4.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / Single Room -->

                                            <!-- Double Room -->
                                            <div class="tour-details-content">
                                                <h4 class="title text-capitalize">Double Room</h4>
                                                <div class="row g-4">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/double_hotel_1.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/double_hotel_2.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/double_hotel_3.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <img src="assets/images/new/double_hotel_4.png" alt=""
                                                            class="w-100 radius-4">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / Double Room --> --}}



                                            <!-- Tour Include Exclude -->
                                            <div class="tour-include-exclude radius-6">
                                                <div class="includ-exclude-point">
                                                    <h4 class="title">Included</h4>
                                                    {{ $resort->included }}
                                                </div>
                                                <div class="divider"></div>
                                                <div class="includ-exclude-point">
                                                    <h4 class="title">Exclude</h4>
                                                    {{ $resort->excluded }}
                                                </div>
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
                                                            <input class="custom-form" type="text" placeholder="Your Phone">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input class="custom-form" type="text"
                                                                placeholder="Select subject">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea class="custom-form-textarea"
                                                                id="exampleFormControlTextarea1" rows="6"
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
                                        <form action="{{ route('booking.store') }}" method="POST" class="col-xl-4 col-lg-5">
                                            @csrf
                                            <input type="hidden" name="resort_id" value="{{ $resort->id }}">
                                            <div class="date-travel-card position-sticky top-0">
                                                <div class="price-review">
                                                    <div class="d-flex gap-10 align-items-end">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">৳{{ $resort->price }}</p>
                                                    </div>
                                                    <div class="rating">
                                                        <p class="pera">Price varies by group size</p>
                                                    </div>
                                                </div>
                                                <h4 class="heading-card">Select Date and Travelers</h4>
                                                <div class="date-time-dropdown">
                                                    <i class="ri-time-line"></i>
                                                    <p class="date-time-result">{{ now()->format('l, M j, Y') }}</p>
                                                    <input type="hidden" name="date_from" id="date_from"
                                                        value="{{ now()->format('Y-m-d') }}">
                                                    <input type="hidden" name="date_to" id="date_to"
                                                        value="{{ now()->format('Y-m-d') }}">
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
                                                                <input type="text" name="number_of_guests[adults]" value="0"
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
                                                                <input type="text" name="number_of_guests[children]"
                                                                    value="0" class="input-qty input-rounded">
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
                                                                <input type="text" name="number_of_guests[infants]"
                                                                    value="0" class="input-qty input-rounded">
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
                                                <div class="mt-25">
                                                    <button type="submit" class="btn-primary-outline btn-xl w-100">Book
                                                        Now</button>
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
