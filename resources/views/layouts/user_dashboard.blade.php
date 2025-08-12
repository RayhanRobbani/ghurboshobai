@extends('layouts.app')

@section('content')
    <main>

        <div class="profile-account-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Mobile Device sidebar open Icon -->
                        <div class="sidebar-users-dashboard-icon">
                            <div class="sidebar-icon"><i class="ri-arrow-left-right-line"></i> </div>
                        </div>
                        <div class="flex-main-content">

                            @include('partials.user_sidebar')

                            @yield('dashboard_content')

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
