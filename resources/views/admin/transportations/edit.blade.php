@extends('layouts.admin_dashboard')
@section('title', __('Edit Transportation') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">Edit Transportation</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-of card -->

        <div class="dashboard-card mb-24">
            <div class="card border-0">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">

                            <!-- General info start -->
                            <form action="{{ route('admin.transportation.update', $transportation) }}" method="POST"
                                enctype="multipart/form-data" class="settings-general-info">
                                @method('PUT')
                                @csrf
                                <!-- Section Tittle -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="title">Title <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="title" id="title"
                                                value="{{ $transportation->title }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="location">Location <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="location" id="location"
                                                value="{{ $transportation->location }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="duration">Duration <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="duration" id="duration"
                                                value="{{ $transportation->duration }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="number_of_individuals">Number of
                                                Individuals <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="number_of_individuals"
                                                id="number_of_individuals"
                                                value="{{ $transportation->number_of_individuals }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="price">Price <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="number" name="price" id="price"
                                                value="{{ $transportation->price }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="about">About <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="about" id="about" cols="3" rows="3" required>{{ $transportation->about }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="driver_name">Driver's Name <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="driver_name" id="driver_name"
                                                value="{{ $transportation->driver_name }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="driver_contact">Driver's Contact <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="driver_contact"
                                                id="driver_contact" value="{{ $transportation->driver_contact }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_primary">Image (Primary)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_primary" id="image_primary"
                                                value="{{ $transportation->title }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_1">Image (Secondary
                                                1)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_1" id="image_secondary_1"
                                                value="{{ $transportation->title }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_2">Image (Secondary
                                                2)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_2" id="image_secondary_2"
                                                value="{{ $transportation->title }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_3">Image (Secondary
                                                3)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_3" id="image_secondary_3"
                                                value="{{ $transportation->title }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex float-end gap-10 mt-10">
                                            <button class="btn-primary-fill" type="submit">
                                                Update
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- General info end -->

                        </div>
                        <!-- End-of Student Setting TAB -->

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
