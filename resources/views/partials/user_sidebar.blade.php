<!-- Sidebar Start -->
<div class="sidebar-wrap">
    <div class="sidebar-body-overlay"></div>
    <div class="sidebar-users-dashboard section-bg-two">
        <div class="sidebar-users-dashboard-close-main">
            <!-- Mobile Device Close Icon -->
            <div class="close-sidebar"><i class="ri-close-line"></i></div>

            <!-- Top -->
            <div class="sidebar-users-dashboard-top mb-40 position-relative">
                <div class="d-flex align-items-center justify-content-start gap-10">
                    <div class="thumb">
                        <img src="/assets/images/hero/user-1.jpeg" alt="img" class="img-cover">
                    </div>
                    <div class="">
                        <h5 class="text-capitalize font-600 text-18 mb-6">Mr. John</h5>
                        <a href="{{ route('dashboard') }}" class="text-capitalize font-500 text-14 d-block">update your
                            profile
                            <i class="ri-edit-line"></i></a>
                    </div>
                </div>
            </div>

            <!-- Page List -->
            <div class="sidebar-users-dashboard-mid nice-scroll">
                <ul class="sidebar-users-dashboard-list">
                    <li class="list active">
                        <a href="{{ route('dashboard') }}" class="single">
                            <i class="ri-home-8-line"></i> Dashboard </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('dashboard') }}" class="single">
                            <i class="ri-bookmark-3-line"></i> Tour Booking</a>
                    </li>
                    <li class="list">
                        <a href="{{ route('dashboard') }}" class="single">
                            <i class="ri-hotel-bed-line"></i> Resort Booking</a>
                    </li>
                    <li class="list">
                        <a href="{{ route('dashboard') }}" class="single">
                            <i class="ri-taxi-line"></i> Transport Booking</a>
                    </li>
                    {{-- <li class="list">
                        <a href="payout-settings.html" class="single">
                            <i class="ri-bank-line"></i> Payout settings</a>
                    </li>
                    <li class="list">
                        <a href="support.html" class="single">
                            <i class="ri-question-mark"></i>Support</a>
                    </li> --}}
                </ul>
            </div>

            <!-- Page List -->
            <div class="sidebar-users-dashboard-bottom mb-20">
                <ul class="sidebar-users-dashboard-list">
                    <li class="list">
                        <a href="{{ route('dashboard') }}" class="single">
                            <i class="ri-settings-4-line"></i>profile settings </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('logout') }}" class="single"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ri-logout-box-line"></i> logout </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End-of Sidebar -->
