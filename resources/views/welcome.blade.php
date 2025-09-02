@extends('layouts.app')

@section('content')
    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three video-overlay position-relative">
            <!-- Video -->
            <div class="hero-bg-video">
                <video class="hero-slider-video video-cover" poster="assets/images/hero/hero-three-banner.png" loop autoplay
                    muted>
                    <source src="assets/images/videos/travel1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <div class="hero-caption-three position-relative z-3">
                            <h4 class="title wow fadeInUp" data-wow-delay="0.0s">
                                Plan tours to dream locations in just a click!
                            </h4>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures, and
                                landscapes
                            </p>
                        </div>
                        <div class="hero-footer position-relative z-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="all-user">
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-2.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-3.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                </div>
                                <div class="happy-user-count">
                                    <p class="user-count">5k+</p>
                                </div>
                                <p class="pera">Happy Customer</p>
                                <span class="wave-emoji">
                                    <img src="assets/images/icon/hand.png" alt="travello">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->

        <!-- Plan area S t a r t -->
        <section class="plan-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="plan-section-three plan-shadow">
                            <div class="choose-plan-nav">

                                <!-- Buttons Type Select -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link active" id="tour-tab" data-bs-toggle="tab"
                                            data-bs-target="#tour" type="button" role="tab" aria-controls="tour"
                                            aria-selected="true">
                                            <i class="ri-flight-takeoff-fill"></i> Tour
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link" id="book-resort" data-bs-toggle="tab"
                                            data-bs-target="#resort-tap" type="button" role="tab" aria-controls="resort-tap"
                                            aria-selected="false">
                                            <i class="ri-hotel-bed-line"></i>Resort
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link" id="book-cruise" data-bs-toggle="tab"
                                            data-bs-target="#cruise-tap" type="button" role="tab" aria-controls="cruise-tap"
                                            aria-selected="false">
                                            <i class="ri-car-line"></i>Cruise
                                        </button>
                                    </li>
                                </ul>
                                <!-- / End-of Buttons -->

                                <!-- Tab Search Contents -->
                                <div class="tab-content" id="tourTab">
                                    <form action="{{ route('tour.index') }}" method="POST" class="tab-pane fade show active"
                                        id="tour" role="tabpanel" aria-labelledby="tour-tab">
                                        @method('GET')
                                        @csrf
                                        <div class="row g-4 justify-content-center">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="contact-form mb-24">
                                                            <label class="contact-label" for="location_id">Location <span
                                                                    class="text-danger">*</span></label>
                                                            <!-- Select2 -->
                                                            <select class="select2 select2-hidden-accessible" tabindex="-1"
                                                                aria-hidden="true" name="location_id" id="location_id"
                                                                required>
                                                                <option value=""></option>
                                                                @foreach ($locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn text-right">
                                                    <button href="tour-list.html"
                                                        class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form action="{{ route('resort.index') }}" method="POST" class="tab-pane fade"
                                        id="resort-tap" role="tabpanel" aria-labelledby="book-resort">
                                        @method('GET')
                                        @csrf
                                        <div class="row g-4 justify-content-center">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="contact-form mb-24">
                                                            <label class="contact-label" for="location_id">Location <span
                                                                    class="text-danger">*</span></label>
                                                            <!-- Select2 -->
                                                            <select class="select2 select2-hidden-accessible" tabindex="-1"
                                                                aria-hidden="true" name="location_id" id="location_id"
                                                                required>
                                                                <option value=""></option>
                                                                @foreach ($locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn text-right">
                                                    <button href="tour-list.html"
                                                        class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form action="{{ route('cruise.index') }}" method="POST" class="tab-pane fade"
                                        id="cruise-tap" role="tabpanel" aria-labelledby="book-cruise">
                                        @method('GET')
                                        @csrf
                                        <div class="row g-4 justify-content-center">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="contact-form mb-24">
                                                            <label class="contact-label" for="location_id">Location <span
                                                                    class="text-danger">*</span></label>
                                                            <!-- Select2 -->
                                                            <select class="select2 select2-hidden-accessible" tabindex="-1"
                                                                aria-hidden="true" name="location_id" id="location_id"
                                                                required>
                                                                <option value=""></option>
                                                                @foreach ($locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn text-right">
                                                    <button href="tour-list.html"
                                                        class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- / End-of Search Contents -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Plan-->

        <!-- Packages S t a r t -->
        <section class="package-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-464 mx-auto text-center">
                            <span class="highlights">Popular Packages</span>
                            <h4 class="title">
                                Most Favorite Tour Place in The World
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tab Buttons -->
                        <ul class="nav nav-pills package-pills" id="pills-tab" role="tablist">
                            <li class="nav-item package-item" role="presentation">
                                <button class="nav-link package-nav active" id="pills-london-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-london" role="tab" aria-controls="pills-london"
                                    aria-selected="true">
                                    London
                                </button>
                            </li>
                            <li class="nav-item package-item" role="presentation">
                                <button class="nav-link package-nav" id="pills-bangkok-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bangkok" role="tab" aria-controls="pills-bangkok"
                                    aria-selected="false">
                                    Bangkok
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link package-nav" id="pills-hongkong-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-hongkong" role="tab" aria-controls="pills-hongkong"
                                    aria-selected="false">
                                    Hong Kong
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link package-nav" id="pills-manchester-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-manchester" role="tab" aria-controls="pills-manchester"
                                    aria-selected="false">
                                    Manchester
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link package-nav" id="pills-dubai-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-dubai" role="tab" aria-controls="pills-dubai"
                                    aria-selected="false">
                                    Dubai
                                </button>
                            </li>
                        </ul>
                        <!-- Tab contents -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-london" role="tabpanel"
                                aria-labelledby="pills-london-tab">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-4.png" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-3.png" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-2.png" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-10.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bangkok" role="tabpanel"
                                aria-labelledby="pills-bangkok-tab">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-5.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-6.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-7.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-8.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-hongkong" role="tabpanel"
                                aria-labelledby="pills-hongkong-tab">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-9.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-10.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-11.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-12.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-manchester" role="tabpanel"
                                aria-labelledby="pills-manchester-tab">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-13.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-14.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-15.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-16.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                                <div class="row g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-17.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-18.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-19.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="package-card h-calc">
                                            <div class="package-img imgEffect4">
                                                <a href="details-with-slider.html">
                                                    <img src="assets/images/package/package-20.jpg" alt="travello">
                                                </a>
                                                <div class="image-badge">
                                                    <p class="pera">Featured</p>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                                </h4>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Bangkok, Thailand</div>
                                                </div>
                                                <div class="packages-person">
                                                    <div class="count">
                                                        <i class="ri-time-line"></i>
                                                        <p class="pera">3 Days 2 Night</p>
                                                    </div>
                                                    <div class="count">
                                                        <i class="ri-user-line"></i>
                                                        <p class="pera">2 Person</p>
                                                    </div>
                                                </div>
                                                <div class="price-review">
                                                    <div class="d-flex gap-10">
                                                        <p class="light-pera">From</p>
                                                        <p class="pera">$95</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="ri-star-s-fill"></i>
                                                        <p class="pera">4.7 (20 Reviews)</p>
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
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-button d-inline-block">
                            <a href="tour-list.html">
                                <div class="btn-primary-icon-sm">
                                    <p class="pera">View All Tour</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Packages -->

        <!-- Special area S t a r t -->
        <section class="special-area bottom-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">special offers</span>
                            <h4 class="title">
                                Winter Our Big Offers to Inspire You
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInLeft" data-wow-delay="0.0s">
                            <img src="assets/images/gallery/offercard-1.jpg" alt="travello">
                            <div class="offer-content">
                                <p class="highlights-text">Save up to</p>
                                <h4 class="title">50%</h4>
                                <p class="pera">Let’s Explore The World</p>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="name">Bangkok, Thailand</p>
                                </div>
                                <div class="btn-secondary-sm radius-30"> Booking Now </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInRight" data-wow-delay="0.0s">
                            <img src="assets/images/gallery/offercard-2.jpg" alt="travello">
                            <div class="offer-content-two">
                                <h4 class="title">Nearby Resort</h4>
                                <p class="pera">
                                    Up to <span class="highlights-text">50%</span> Off
                                </p>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="name">Bangkok, Thailand</p>
                                </div>
                                <div class="btn-secondary-sm radius-30"> Booking Now </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of special-->

        <!-- Trip area S t a r t -->
        <section class="special-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-464 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Enjoy Trip</span>
                            <h4 class="title">
                                Top Domestic & International Tour
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Trip Buttons -->
                        <ul class="nav nav-pills trip-pills" id="pills-tab" role="tablist">
                            <li class="nav-item trip-item" role="presentation">
                                <button class="nav-link trip-nav active" id="pills-domestic-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-domestic" type="button" role="tab" aria-controls="pills-domestic"
                                    aria-selected="true">
                                    Domestic
                                </button>
                            </li>
                            <li class="nav-item trip-item" role="presentation">
                                <button class="nav-link trip-nav" id="pills-international-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-international" type="button" role="tab"
                                    aria-controls="pills-international" aria-selected="false">
                                    International
                                </button>
                            </li>
                        </ul>
                        <!-- / End-of Trip Buttons -->

                        <!-- Tab Contents -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-domestic" role="tabpanel"
                                aria-labelledby="pills-domestic-tab">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Sylhet</h4>
                                                <p class="from-pera line-clamp-1">Osman Internatin...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">kolkata</h4>
                                                <p class="from-pera line-clamp-1">kolkata Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">india</h4>
                                                <p class="from-pera line-clamp-1">Shah Amanat Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">india</h4>
                                                <p class="from-pera line-clamp-1">Shah Amanat Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">canada</h4>
                                                <p class="from-pera line-clamp-1">canada Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">kolkata</h4>
                                                <p class="from-pera line-clamp-1">kolkata Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-international" role="tabpanel"
                                aria-labelledby="pills-international-tab">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Australia</h4>
                                                <p class="from-pera line-clamp-1">
                                                    Australia Internatin...
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Usa</h4>
                                                <p class="from-pera line-clamp-1">Usa Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Japan</h4>
                                                <p class="from-pera line-clamp-1">Narita Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Hongkok</h4>
                                                <p class="from-pera line-clamp-1">Hongkok Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Japan</h4>
                                                <p class="from-pera line-clamp-1">Narita Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="details-with-slider.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Canada</h4>
                                                <p class="from-pera line-clamp-1">Canada Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / End-of Tab contents -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of trip-->

        <!-- About Us area S t a r t -->
        <section class="about-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <span class="highlights fancy-font font-400">About Us</span>
                            <h4 class="title">
                                Get The Best Travel Experience With Travello
                            </h4>
                            <p class="pera">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures, and
                                landscapes. It is a fundamental human activity that has been
                                practiced for centuries and continues to be a source of joy,
                                learning, and personal growth.
                            </p>
                            <p class="pera">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures.
                            </p>
                            <div class="section-button mt-27 d-inline-block">
                                <a href="about.html" class="btn-primary-icon-sm radius-20">
                                    <p class="pera mt-0">Learn More</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="about-imp-link mt-40">
                                <div class="icon">
                                    <i class="ri-user-line"></i>
                                </div>
                                <div class="content">
                                    <p class="pera font-16">
                                        <span class="font-700">2,500</span> People Booked Tomorrow
                                        Land Event in the Last 24 hours
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img src="assets/images/gallery/about-banner-three.png" alt="travello">
                            </div>
                            <div class="all-count-list">
                                <div class="details">
                                    <h4 class="count">150k</h4>
                                    <p class="pera">Happy Traveler</p>
                                </div>
                                <div class="divider"></div>
                                <div class="details">
                                    <h4 class="count">95.7%</h4>
                                    <p class="pera">Satisfaction Rate</p>
                                </div>
                                <div class="divider"></div>
                                <div class="details">
                                    <h4 class="count">5000+</h4>
                                    <p class="pera">Tour Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of About US-->

        <!-- Feature S t a r t -->
        <section class="feature-area feature-area-bg section-padding2">
            <div class="container">
                <div class="row justify-content-center position-relative z-10">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-464 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Features Tour</span>
                            <h4 class="title">
                                Most Favorite Tour Place in The World
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 position-relative z-10">
                    <div class="swiper favSwiper-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-4.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-3.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-2.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-10.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-4.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-3.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-2.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="details-with-slider.html">
                                            <img src="assets/images/package/package-10.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="details-with-slider.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div>
                    </div>
                </div>
                <div class="row position-relative z-10">
                    <div class="col-12 text-center">
                        <div class="section-button d-inline-block">
                            <a href="tour-list.html">
                                <div class="btn-primary-icon-sm border-radius-20">
                                    <p class="pera">View All Tour</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Feature -->

        <!-- Destination area S t a r t -->
        <section class="destination-area destination-bg-before">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-464 mx-auto position-relative">
                            <span class="highlights">Destination List</span>
                            <h4 class="title">
                                Explore The Beautiful Places Around World
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/destination-01.png" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/destination-1.png" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/destination-001.jpg" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="details-with-gallery.html" class="destination-banner">
                                    <img src="assets/images/destination/destination-3.png" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Switzerland</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Zürich View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="details-with-gallery.html" class="destination-banner">
                                    <img src="assets/images/destination/destination-4.png" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Australia</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Melbourne View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="details-with-gallery.html" class="destination-banner">
                                    <img src="assets/images/destination/destination-5.png" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Canada</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Toronto View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="details-with-gallery.html" class="destination-banner">
                                    <img src="assets/images/destination/destination-02.png" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Canada</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Toronto View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="shape">
                <img src="assets/images/icon/shape.png" alt="travello">
            </div>
        </section>
        <!--/ End-of Destination -->

        <!-- Explore S t a r t -->
        <section class="explore-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-430 mx-auto position-relative mb-60">
                            <span class="highlights">Explore The Word</span>
                            <h4 class="title">
                                Our Best Offer Package For You
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Fishing & Swimming</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-2.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Music & Relaxing</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-3.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Trailers & Sports</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-4.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Mountain & Hill Hiking</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-five"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-5.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Paragliding Tours</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-six-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-six" role="tab" aria-controls="pills-explore-six"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Music & Relaxing</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-seven-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-seven" role="tab" aria-controls="pills-explore-seven"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-2.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Mountain & Hill Hiking</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-eight-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-eight" role="tab" aria-controls="pills-explore-eight"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div>
                                    <h4 class="name">Fishing & Swimming</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="tab-content" id="v-pills-tabContent-three">
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel"
                                aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/about.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel"
                                aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/music.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/sports.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/hiking.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-five" role="tabpanel"
                                aria-labelledby="pills-explore-five">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/paragliding.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-six" role="tabpanel"
                                aria-labelledby="pills-explore-six">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/music.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-seven" role="tabpanel"
                                aria-labelledby="pills-explore-seven">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/hiking.png" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-eight" role="tabpanel"
                                aria-labelledby="pills-explore-eight">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/about.png" alt="travello">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Explore -->

        <!-- Testimonial S t a r t -->
        <section class="testimonial-area-three position-relative section-bg-before-two top-padding">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Testimonial</span>
                            <h4 class="title">
                                What People Have Said About Our Service
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="assets/images/hero/testimonial-three-banner.png" alt="travello">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="travello">
                            </div>
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery"
                                class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- / End Slider -->
                </div>
            </div>
            <div class="shape-testimonial">
                <img src="assets/images/icon/graphic.png" alt="travello">
            </div>
        </section>
        <!--/ End of Testimonial -->

        <!-- Brand S t a r t -->
        <div class="brand-area">
            <div class="container">
                <div class="swiper brandSwiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/grameenphone.png" alt="grameenphone">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/marico.png" alt="marico">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/uc.png" alt="uc">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/itc.png" alt="itc">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/skoot.png" alt="skoot">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/grameenphone.png" alt="grameenphone">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/marico.png" alt="marico">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/uc.png" alt="uc">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/itc.png" alt="itc">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/skoot.png" alt="skoot">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End of Brand -->

        <!-- News S t a r t -->
        <section class="news-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                            <span class="highlights">News & Article</span>
                            <h4 class="title">
                                Latest News & Articles From The Blog Posts
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/news-4.png" alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/news-5.png" alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/news-6.png" alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="news.html">
                            <div class="btn-primary-icon-sm">
                                <p class="pera">View All News</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of News -->
    </main>
@endsection
