@extends('layouts.app')
@section('title', __('Tour Details') . ' | ')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Tour Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Tour Details</a>
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

                <!-- Details Banner Slider -->
                <div class="tour-details-banner">
                    <div class="swiper tourSwiper-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/tour/' . $tour->image_primary) }}" alt="image_primary">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/tour/' . $tour->image_secondary_1) }}"
                                    alt="trimage_secondary_1avello">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/tour/' . $tour->image_secondary_2) }}" alt="image_secondary_2">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/tour/' . $tour->image_secondary_3) }}" alt="image_secondary_3">
                            </div>
                            @if ($tour->image_secondary_4)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_4) }}" alt="image_secondary_4">
                                </div>
                            @endif
                            @if ($tour->image_secondary_5)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_5) }}" alt="image_secondary_5">
                                </div>
                            @endif
                            @if ($tour->image_secondary_6)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_6) }}" alt="image_secondary_6">
                                </div>
                            @endif
                            @if ($tour->image_secondary_7)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_7) }}" alt="image_secondary_7">
                                </div>
                            @endif
                            @if ($tour->image_secondary_8)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_8) }}" alt="image_secondary_8">
                                </div>
                            @endif
                            @if ($tour->image_secondary_9)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_9) }}" alt="image_secondary_9">
                                </div>
                            @endif
                            @if ($tour->image_secondary_10)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_10) }}"
                                        alt="image_secondary_10">
                                </div>
                            @endif
                            @if ($tour->image_secondary_11)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_11) }}"
                                        alt="image_secondary_11">
                                </div>
                            @endif
                            @if ($tour->image_secondary_12)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_12) }}"
                                        alt="image_secondary_12">
                                </div>
                            @endif
                            @if ($tour->image_secondary_13)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_13) }}"
                                        alt="image_secondary_13">
                                </div>
                            @endif
                            @if ($tour->image_secondary_14)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/tour/' . $tour->image_secondary_14) }}"
                                        alt="image_secondary_14">
                                </div>
                            @endif
                        </div>
                        <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                        <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                    </div>
                </div>
                <!-- / Slider-->

                <div class="tour-details-container">
                    <div class="container">

                        <!-- Details day -->
                        <div class="details-heading">
                            <div class="d-flex flex-column">
                                <h4 class="title text-capitalize">{{ $tour->title }}</h4>
                                <div class="d-flex flex-wrap align-items-center gap-30 mt-16">
                                    <div class="location">
                                        <i class="ri-map-pin-line"></i>
                                        <div class="name">{{ $tour->location->name }}</div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="d-flex align-items-center flex-wrap gap-20">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">{{ $tour->duration }}</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">{{ $tour->number_of_individuals }}n</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-review">
                                <div class="d-flex gap-10 align-items-end">
                                    <p class="light-pera">From</p>
                                    <p class="pera">৳{{ $tour->price }}</p>
                                </div>
                                <div class="rating">
                                    <i class="ri-star-s-fill"></i>
                                    <p class="pera">4.7 (20 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <!-- / Details day -->

                        <div class="mt-30">
                            <div class="row g-4">
                                <!-- Left content -->
                                <div class="col-xl-8 col-lg-7">

                                    <!-- About tour -->
                                    <div class="tour-details-content">
                                        <h4 class="title">About</h4>
                                        <p class="pera">{{ $tour->about }}</p>
                                    </div>
                                    <!-- / About tour -->

                                    <!-- Tour Include Exclude -->
                                    <div class="tour-include-exclude radius-6">
                                        <div class="includ-exclude-point">
                                            <h4 class="title">Included</h4>
                                            {{-- <ul class="expect-list">
                                                <li class="list">{{ $tour->included }}</li>
                                            </ul> --}}
                                            {{ $tour->included }}
                                        </div>
                                        <div class="divider"></div>
                                        <div class="includ-exclude-point">
                                            <h4 class="title">Exclude</h4>
                                            {{-- <ul class="expect-list">
                                                <li class="list">{{ $tour->excluded }}</li>
                                            </ul> --}}
                                            {{ $tour->excluded }}
                                        </div>
                                    </div>
                                    <!-- / Tour Include Exclude -->

                                    @if (
                                            $tour->tour_plan_day_1 ||
                                            $tour->tour_plan_day_2 ||
                                            $tour->tour_plan_day_3 ||
                                            $tour->tour_plan_day_4 ||
                                            $tour->tour_plan_day_5
                                        )
                                        <!-- Tour Plan accordion-->
                                        <div class="tour-details-content mb-30">
                                            <h4 class="title">Tour Plan</h4>
                                            <div class="destination-accordion">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    @if ($tour->tour_plan_day_1)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-dayOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                                    Day 1 - {{ $tour->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseOne"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-dayOne">
                                                                <div class="accordion-body">
                                                                    <p class="pera mb-16">{{ $tour->tour_plan_day_1 }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($tour->tour_plan_day_2)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-dayTwo">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                                                    Day 2 - {{ $tour->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-dayTwo">
                                                                <div class="accordion-body">
                                                                    <p class="pera mb-16">{{ $tour->tour_plan_day_2 }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($tour->tour_plan_day_3)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-dayThree">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseThree">
                                                                    Day 3 - {{ $tour->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseThree"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-dayThree">
                                                                <div class="accordion-body">
                                                                    <p class="pera mb-16">{{ $tour->tour_plan_day_3 }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($tour->tour_plan_day_4)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-dayFour">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseFour"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseFour">
                                                                    Day 4 - {{ $tour->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseFour"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-dayFour">
                                                                <div class="accordion-body">
                                                                    <p class="pera mb-16">{{ $tour->tour_plan_day_4 }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($tour->tour_plan_day_5)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-dayFive">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseFive"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseFive">
                                                                    Day 5 - {{ $tour->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseFive"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-dayFive">
                                                                <div class="accordion-body">
                                                                    <p class="pera mb-16">{{ $tour->tour_plan_day_5 }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / Tour Plan accordion-->
                                    @endif

                                    <!-- Tour Privacy Policy -->
                                    <div class="tour-details-content">
                                        <h4 class="title">Policy</h4>
                                        <p class="pera">{{ $tour->policy }}</p>
                                        {{-- <ol class="policy-point">
                                            <li class="list">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                amet, consectetur,
                                                adipisci velit.</li>
                                            <li class="list">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit.</li>
                                            <li class="list">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod.</li>
                                        </ol> --}}
                                    </div>
                                    <!-- / Tour Privacy Policy -->
                                </div>

                                <!-- Right content -->
                                <form action="{{ route('booking.store') }}" method="POST" class="col-xl-4 col-lg-5">
                                    @csrf
                                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                                    <div class="date-travel-card position-sticky top-0">
                                        <div class="price-review">
                                            <div class="d-flex gap-10 align-items-end">
                                                <p class="light-pera">From</p>
                                                <p class="pera">৳{{ $tour->price }}</p>
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
                                                        <input type="text" name="number_of_guests[children]" value="0"
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
                                                        <input type="text" name="number_of_guests[infants]" value="0"
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
                                        <div class="mt-25">
                                            <button type="submit" class="btn-primary-outline btn-xl w-100">Book Now</button>
                                        </div>
                                        <div class="footer bg-transparent">
                                            <h4 class="title">Free Cancellation</h4>
                                            <p class="pera">Up to 24 hours in advance</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Destination -->
    </main>
@endsection
