@extends('layouts.app')
@section('title', __('Transportation Locations') . ' | ')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Transportation Locations</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Location List</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Destination area S t a r t -->
        <section class="destination-section-two bottom-padding1" style="padding-top: 100px;">
            <div class="destination-area-two position-relative">
                <div class="container">
                    <div class="row g-4">
                        @foreach ($locations as $location)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <a href="{{ route('transportation.index', $location) }}" class="destination-banner-two h-calc wow fadeInUp"
                                    data-wow-delay="0.s">
                                    <img src="{{ asset('storage/location/' . $location->image) }}" alt="travello">
                                    <div class="destination-content-two">
                                        <div class="ratting-badge">
                                            <span>{{ $location->transportations->count() }} Trasnportations</span>
                                        </div>
                                        <div class="destination-info-two">
                                            <div class="destination-name">
                                                <p class="pera">{{ $location->name }}</p>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow"><i class="ri-arrow-right-line"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Destination -->
    </main>
@endsection
