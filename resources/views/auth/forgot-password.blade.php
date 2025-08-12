@extends('layouts.app')

@section('content')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Forgot Password</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a>
                            </li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a
                                    href="{{ route('password.request') }}" class="single active">Forgot Password</a></li>
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
                                    <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                                </a>
                            </div>
                            <!-- Form -->
                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="contact-form mb-24">
                                    <label class="contact-label" for="email">Email </label>
                                    <input class="form-control contact-input" id="email" type="email" name="email"
                                        value="{{ old('email') }}" required autofocus placeholder="Email">
                                    @error('email')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button class="btn-primary-fill justify-content-center w-100">
                                    <span class="d-flex justify-content-center gap-6">
                                        <span>Reset Password</span>
                                    </span>
                                </button>
                            </form>

                            <div class="login-footer">
                                <div class="create-account">
                                    <p class="mb-0">
                                        Go back to
                                        <a href="{{ route('login') }}">
                                            <span class="text-primary">Login</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End-of Login -->
    </main>
@endsection
