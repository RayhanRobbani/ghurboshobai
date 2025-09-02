@extends('layouts.user_dashboard')
@section('title', __('User Dashboard') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">Cruise Booking</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="card border-0">
                <div class="row">
                    <div class="col-12">

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-15 mb-20">
                            <!--  TAB -->
                            <ul class="nav course-details-tabs setting-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="zero-tab" data-bs-toggle="tab"
                                        data-bs-target="#zero" type="button" role="tab" aria-controls="zero"
                                        aria-selected="true">
                                        <span>all</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                                        type="button" role="tab" aria-controls="one" aria-selected="false" tabindex="-1">
                                        <span>pending</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                                        type="button" role="tab" aria-controls="two" aria-selected="false" tabindex="-1">
                                        <span>processing </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three"
                                        type="button" role="tab" aria-controls="three" aria-selected="false" tabindex="-1">
                                        <span>confirmed </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four"
                                        type="button" role="tab" aria-controls="four" aria-selected="false" tabindex="-1">
                                        <span>cancelled </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="zero" role="tabpanel" aria-labelledby="zero-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="small-tittle-two pb-0 mb-10">
                                            <h5 class="title font-600 text-capitalize">all booking </h5>
                                        </div>
                                        <div class="data-show-table">
                                            <table class="table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Guests</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cruises as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->user->name }}</td>
                                                            <td class="ticket-subject">
                                                                <a href="{{ route('cruise.show', $booking->cruise_id) }}"
                                                                    class="line-clamp-1 text-primary text-capitalize">{{ $booking->cruise->title }}</a>
                                                            </td>
                                                            <td class="min-w-120">
                                                                {{ $booking->date_from }}
                                                                @if ($booking->date_from == $booking->date_to)
                                                                    to {{ $booking->date_to }}
                                                                @endif
                                                            </td>
                                                            @php
                                                                $number_of_guests = json_decode($booking->number_of_guests);
                                                            @endphp
                                                            <td>
                                                                Adults: {{ $number_of_guests->adults }}<br>
                                                                Children: {{ $number_of_guests->children }}<br>
                                                                Infants: {{ $number_of_guests->infants }}
                                                            </td>
                                                            @if ($booking->status == 'Pending')
                                                                <td class="text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Processing')
                                                                <td class="text-warning text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Confirmed')
                                                                <td class="text-success text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Cancelled')
                                                                <td class="text-danger text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            <td>
                                                                <div class="d-flex gap-6">
                                                                    @if ($booking->status == 'Pending')
                                                                        <a href="{{ route('status_update', [$booking, 'Cancelled']) }}"
                                                                            class="text-16 text-paragraph"><i
                                                                                class="ri-close-circle-line text-danger"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                title="Mark Cancelled"></i></a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <td colspan="7" class="text-center">No records</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="one" role="tabpanel" aria-labelledby="one-tab">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="small-tittle-two pb-0 mb-10">
                                            <h5 class="title font-600 text-capitalize">pending booking </h5>
                                        </div>
                                        <div class="data-show-table">
                                            <table class="table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Guests</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cruises->where('status', 'Pending') as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->user->name }}</td>
                                                            <td class="ticket-subject">
                                                                <a href="{{ route('cruise.show', $booking->cruise_id) }}"
                                                                    class="line-clamp-1 text-primary text-capitalize">{{ $booking->cruise->title }}</a>
                                                            </td>
                                                            <td class="min-w-120">
                                                                {{ $booking->date_from }}
                                                                @if ($booking->date_from == $booking->date_to)
                                                                    to {{ $booking->date_to }}
                                                                @endif
                                                            </td>
                                                            @php
                                                                $number_of_guests = json_decode($booking->number_of_guests);
                                                            @endphp
                                                            <td>
                                                                Adults: {{ $number_of_guests->adults }}<br>
                                                                Children: {{ $number_of_guests->children }}<br>
                                                                Infants: {{ $number_of_guests->infants }}
                                                            </td>
                                                            @if ($booking->status == 'Pending')
                                                                <td class="text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Processing')
                                                                <td class="text-warning text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Confirmed')
                                                                <td class="text-success text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Cancelled')
                                                                <td class="text-danger text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            <td>
                                                                <div class="d-flex gap-6">
                                                                    @if ($booking->status == 'Pending')
                                                                        <a href="{{ route('status_update', [$booking, 'Cancelled']) }}"
                                                                            class="text-16 text-paragraph"><i
                                                                                class="ri-close-circle-line text-danger"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                title="Mark Cancelled"></i></a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <td colspan="7" class="text-center">No records</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="small-tittle-two pb-0 mb-10">
                                            <h5 class="title font-600 text-capitalize">Processing booking </h5>
                                        </div>
                                        <div class="data-show-table">
                                            <table class="table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Guests</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cruises->where('status', 'Processing') as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->user->name }}</td>
                                                            <td class="ticket-subject">
                                                                <a href="{{ route('cruise.show', $booking->cruise_id) }}"
                                                                    class="line-clamp-1 text-primary text-capitalize">{{ $booking->cruise->title }}</a>
                                                            </td>
                                                            <td class="min-w-120">
                                                                {{ $booking->date_from }}
                                                                @if ($booking->date_from == $booking->date_to)
                                                                    to {{ $booking->date_to }}
                                                                @endif
                                                            </td>
                                                            @php
                                                                $number_of_guests = json_decode($booking->number_of_guests);
                                                            @endphp
                                                            <td>
                                                                Adults: {{ $number_of_guests->adults }}<br>
                                                                Children: {{ $number_of_guests->children }}<br>
                                                                Infants: {{ $number_of_guests->infants }}
                                                            </td>
                                                            @if ($booking->status == 'Pending')
                                                                <td class="text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Processing')
                                                                <td class="text-warning text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Confirmed')
                                                                <td class="text-success text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Cancelled')
                                                                <td class="text-danger text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            <td>
                                                                <div class="d-flex gap-6">
                                                                    @if ($booking->status == 'Pending')
                                                                        <a href="{{ route('status_update', [$booking, 'Cancelled']) }}"
                                                                            class="text-16 text-paragraph"><i
                                                                                class="ri-close-circle-line text-danger"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                title="Mark Cancelled"></i></a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <td colspan="7" class="text-center">No records</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="small-tittle-two pb-0 mb-10">
                                            <h5 class="title font-600 text-capitalize">Confirmed Booking </h5>
                                        </div>
                                        <div class="data-show-table">
                                            <table class="table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Guests</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cruises->where('status', 'Confirmed') as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->user->name }}</td>
                                                            <td class="ticket-subject">
                                                                <a href="{{ route('cruise.show', $booking->cruise_id) }}"
                                                                    class="line-clamp-1 text-primary text-capitalize">{{ $booking->cruise->title }}</a>
                                                            </td>
                                                            <td class="min-w-120">
                                                                {{ $booking->date_from }}
                                                                @if ($booking->date_from == $booking->date_to)
                                                                    to {{ $booking->date_to }}
                                                                @endif
                                                            </td>
                                                            @php
                                                                $number_of_guests = json_decode($booking->number_of_guests);
                                                            @endphp
                                                            <td>
                                                                Adults: {{ $number_of_guests->adults }}<br>
                                                                Children: {{ $number_of_guests->children }}<br>
                                                                Infants: {{ $number_of_guests->infants }}
                                                            </td>
                                                            @if ($booking->status == 'Pending')
                                                                <td class="text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Processing')
                                                                <td class="text-warning text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Confirmed')
                                                                <td class="text-success text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Cancelled')
                                                                <td class="text-danger text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            <td>
                                                                <div class="d-flex gap-6">
                                                                    @if ($booking->status == 'Pending')
                                                                        <a href="{{ route('status_update', [$booking, 'Cancelled']) }}"
                                                                            class="text-16 text-paragraph"><i
                                                                                class="ri-close-circle-line text-danger"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                title="Mark Cancelled"></i></a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <td colspan="7" class="text-center">No records</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="small-tittle-two pb-0 mb-10">
                                            <h5 class="title font-600 text-capitalize">Cancelled Payment </h5>
                                        </div>
                                        <div class="data-show-table">
                                            <table class="table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Guests</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cruises->where('status', 'Cancelled') as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->user->name }}</td>
                                                            <td class="ticket-subject">
                                                                <a href="{{ route('cruise.show', $booking->cruise_id) }}"
                                                                    class="line-clamp-1 text-primary text-capitalize">{{ $booking->cruise->title }}</a>
                                                            </td>
                                                            <td class="min-w-120">
                                                                {{ $booking->date_from }}
                                                                @if ($booking->date_from == $booking->date_to)
                                                                    to {{ $booking->date_to }}
                                                                @endif
                                                            </td>
                                                            @php
                                                                $number_of_guests = json_decode($booking->number_of_guests);
                                                            @endphp
                                                            <td>
                                                                Adults: {{ $number_of_guests->adults }}<br>
                                                                Children: {{ $number_of_guests->children }}<br>
                                                                Infants: {{ $number_of_guests->infants }}
                                                            </td>
                                                            @if ($booking->status == 'Pending')
                                                                <td class="text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Processing')
                                                                <td class="text-warning text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Confirmed')
                                                                <td class="text-success text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            @if ($booking->status == 'Cancelled')
                                                                <td class="text-danger text-capitalize">{{ $booking->status }}</td>
                                                            @endif
                                                            <td>
                                                                <div class="d-flex gap-6">
                                                                    @if ($booking->status == 'Pending')
                                                                        <a href="{{ route('status_update', [$booking, 'Cancelled']) }}"
                                                                            class="text-16 text-paragraph"><i
                                                                                class="ri-close-circle-line text-danger"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                title="Mark Cancelled"></i></a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <td colspan="7" class="text-center">No records</td>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End-of Student Setting TAB -->
                    </div>
                </div>
            </div>

        </div>
        <!-- End-of card -->


    </div>
@endsection
