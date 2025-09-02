@extends('layouts.admin_dashboard')
@section('title', __('Admin Dashboard') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">

        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">Admin Dashboard</h5>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="single-dashboard-card single-dashboard-card2 h-calc">
                        <div class="cat-caption">
                            <p class="pera font-600">Tour Booking</p>
                            <div class="single-counter d-flex gap-17">
                                <p class="currency"> <i class="ri-bookmark-3-line"></i></p>
                                <p class="amount">{{ $tour_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-dashboard-card single-dashboard-card2 h-calc">
                        <div class="cat-caption">
                            <p class="pera font-600">Resort Booking</p>
                            <div class="single-counter d-flex gap-17">
                                <p class="currency"> <i class="ri-hotel-bed-line"></i></p>
                                <p class="amount">{{ $resort_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-dashboard-card single-dashboard-card2 h-calc">
                        <div class="cat-caption">
                            <p class="pera font-600">Cruise Booking</p>
                            <div class="single-counter d-flex gap-17">
                                <p class="currency"> <i class="ri-ship-2-line"></i></p>
                                <p class="amount">{{ $cruise_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-dashboard-card single-dashboard-card2 h-calc">
                        <div class="cat-caption">
                            <p class="pera font-600">Transport Booking</p>
                            <div class="single-counter d-flex gap-17">
                                <p class="currency"> <i class="ri-taxi-line"></i></p>
                                <p class="amount">{{ $transportation_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-of card -->

        <!-- Recent Transactions Table S t a r t -->
        {{-- <section class="table-data mb-20">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card border-0">

                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-10">
                                                    <!-- Section Tittle -->
                                                    <div class="small-tittle-two pb-0">
                                                        <h5 class="title font-600 text-capitalize">Recent Transactions
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="data-show-table">
                                                    <table class="table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Transactions ID</th>
                                                                <th>Amount</th>
                                                                <th>Charge</th>
                                                                <th>Date</th>
                                                                <th>Remark</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="line-clamp-1 text-primary text-capitalize">gasdf20</a>
                                                                </td>
                                                                <td>$254</td>
                                                                <td>$05</td>
                                                                <td class="min-w-120">24 Apr 2025</td>
                                                                <td class="text-primary text-capitalize font-500">
                                                                    Withdraw</td>
                                                                <td>$1.05</td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="line-clamp-1 text-primary text-capitalize">648sdfe</a>
                                                                </td>
                                                                <td>$9854</td>
                                                                <td>$05</td>
                                                                <td class="min-w-120">24 Apr 2025</td>
                                                                <td class="text-orange text-capitalize font-500">
                                                                    Donation Received</td>
                                                                <td>$987.05</td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="line-clamp-1 text-primary text-capitalize">ytf571</a>
                                                                </td>
                                                                <td>$4854</td>
                                                                <td>$05</td>
                                                                <td class="min-w-120">24 Apr 2025</td>
                                                                <td class="text-primary text-capitalize font-500">My
                                                                    Donation</td>
                                                                <td>$490.05</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
        <!-- End-of Recent Transactions Table -->

        <!-- Recent Travel Table S t a r t -->
        {{-- <section class="recent-traveling">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card border-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-10">
                            <div class="small-tittle-two pb-0">
                                <h5 class="title font-600 text-capitalize">Recent Travel Booking
                                </h5>
                            </div>
                        </div>

                        <div class="data-show-table">
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-capitalize">#</th>
                                        <th class="text-capitalize">Donation Details</th>
                                        <th class="text-capitalize">Donar Details</th>
                                        <th class="text-capitalize">Payment </th>
                                        <th class="text-capitalize">others info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <ul>
                                                <li><span class="font-600 text-title text-capitalize">Title
                                                        :</span> Tree Plantation Drive</li>
                                                <li><span class="font-600 text-title text-capitalize">Goal
                                                        : </span> $5000</li>
                                                <li><span class="font-600 text-title text-capitalize">Raised
                                                        : </span> $2000</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><span class="font-600 text-title text-capitalize">Donor
                                                        Name :</span> Emily White</li>
                                                <li><span class="font-600 text-title text-capitalize">Location
                                                        : </span> Canada</li>
                                                <li><span class="font-600 text-title text-capitalize">Email
                                                        : </span> emily.white@example.com</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><span class="font-600 text-title text-capitalize">Amount
                                                        :</span> $800</li>
                                                <li><span class="font-600 text-title text-capitalize">Transaction
                                                        : </span> 11342ytrw</li>
                                                <li><span class="font-600 text-title text-capitalize">Gateway
                                                        : </span> Stripe</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><span class="font-600 text-title text-capitalize">Amount
                                                        :</span> 25 May, 2025</li>
                                                <li><span class="font-600 text-title text-capitalize">Category:
                                                    </span> Environment</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End-of Recent Travel Table -->

    </div>
@endsection
