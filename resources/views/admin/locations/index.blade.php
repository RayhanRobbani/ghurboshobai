@extends('layouts.admin_dashboard')
@section('title', __('List Locations') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">List Locations</h5>
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
                                            All Locations
                                        </h5>
                                        <a href="{{ route('admin.location.create') }}" class="btn-primary-sm radius-30"><i
                                                class="ri-add-line"></i> New</a>
                                    </div>
                                    <div class="data-show-table">
                                        <table class="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($locations as $location)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $location->name }}</td>
                                                        <td>
                                                            <img class="rounded" src="{{ asset('storage/location/' . $location->image) }}"
                                                                alt="image" height="100px">
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-6">
                                                                <form action="{{ route('admin.location.destroy', $location) }}"
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
