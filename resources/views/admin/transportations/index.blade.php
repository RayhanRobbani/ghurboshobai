@extends('layouts.admin_dashboard')
@section('title', __('List Transportations') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">List Transportations</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-of card -->

        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="card border-0">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-pane fade show active" id="zero" role="tabpanel" aria-labelledby="zero-tab">


                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="small-tittle-two pb-0 mb-10 flex justify-content-between">
                                        <h5 class="title font-600 text-capitalize">
                                            All Transportations
                                        </h5>
                                        <a href="{{ route('admin.transportation.create') }}"
                                            class="btn-primary-sm radius-30"><i class="ri-add-line"></i> New</a>
                                    </div>
                                    <div class="data-show-table">
                                        <table class="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Location</th>
                                                    <th>Duration</th>
                                                    <th>Number of Individuals</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($transportations as $transportation)
                                                    <tr>
                                                        <td>{{ $transportation->id }}</td>
                                                        <td class="ticket-subject">
                                                            <a href="#"
                                                                class="line-clamp-1 text-primary text-capitalize">{{ $transportation->title }}</a>
                                                        </td>
                                                        <td>{{ $transportation->location }}</td>
                                                        <td>{{ $transportation->duration }}</td>
                                                        <td>{{ $transportation->number_of_individuals }}</td>
                                                        <td>৳{{ $transportation->price }}</td>
                                                        <td>
                                                            <div class="d-flex gap-6">
                                                                <a href="details-with-slider.html"
                                                                    class="text-16 text-paragraph"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a href="{{ route('admin.transportation.edit', $transportation) }}"
                                                                    class="text-16 text-paragraph"><i
                                                                        class="ri-edit-2-fill"></i></a>
                                                                <form
                                                                    action="{{ route('admin.transportation.destroy', $transportation) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button
                                                                        class="border-0 bg-transparent text-danger text-16"><i
                                                                            class="ri-delete-bin-7-line"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="7" class="text-center">No data found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
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
