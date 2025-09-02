@extends('layouts.app')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Register</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="{{ route('register') }}"
                                    class="single active">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Login area S t a r t  -->
        <div class="login-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="login-card">
                            <!-- Logo -->
                            <div class="logo mb-40">
                                <a href="{{ route('home') }}" class="mb-30 d-block">
                                    <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo" width="300px">
                                </a>
                            </div>
                            <!-- Form -->
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="contact-form mb-24">
                                    <label class="contact-label" for="name">Name </label>
                                    <input class="form-control contact-input" 1id="name" type="text" name="name"
                                        value="{{ old('name') }}" required autofocus autocomplete="name"
                                        placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="contact-form mb-24">
                                    <label class="contact-label" for="email">Email </label>
                                    <input class="form-control contact-input" id="email" type="email" name="email"
                                        value="{{ old('email') }}" required autocomplete="username" placeholder="Email">
                                    @error('email')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="contact-form mb-24">
                                    <label class="contact-label" for="contact">Phone Number</label>
                                    <input class="form-control contact-input" id="contact" type="tel" name="contact"
                                        value="{{ old('contact') }}" required autocomplete="contact" placeholder="Phone Number">
                                    @error('contact')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label" for="password">Enter Password</label>
                                    <input class="form-control contact-input password-input" id="password" type="password"
                                        name="password" required autocomplete="new-password" placeholder="Enter Password">
                                    <i class="toggle-password ri-eye-line"></i>
                                    @error('password')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="position-relative contact-form mb-24">
                                    <label class="contact-label" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control contact-input password-input" id="password_confirmation"
                                        type="password" name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password">
                                    <i class="toggle-password ri-eye-line"></i>
                                    @error('password_confirmation')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button class="btn-primary-fill justify-content-center w-100">
                                    <span class="d-flex justify-content-center gap-6">
                                        <span>Register</span>
                                    </span>
                                </button>
                            </form>

                            <div class="login-footer mb-20">
                                <div class="create-account">
                                    <p>
                                        Already have an account?
                                        <a href="{{ route('login') }}">
                                            <span class="text-primary">Login</span>
                                        </a>
                                    </p>
                                </div>
                            </div>

                            {{-- <div class="sign-with">
                                <p class="text-paragraph">Or Sign in with</p>
                                <ul class="icon-login-section">
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-mail-line"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                    </li>
                                    <li class="icon-login">
                                        <a href="#"> <i class="ri-linkedin-fill"></i></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End-of Login -->
    </main>
@endsection
