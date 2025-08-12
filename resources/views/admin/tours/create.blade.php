@extends('layouts.admin_dashboard')
@section('title', __('Create New Tour') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">Create New Tour</h5>
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
                            <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data"
                                class="settings-general-info">
                                @csrf
                                <!-- Section Tittle -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="title">Title <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="title" id="title"
                                                placeholder="Title" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="location">Location <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="location" id="location"
                                                placeholder="Location" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="duration">Duration <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="duration" id="duration"
                                                placeholder="Duration" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="number_of_individuals">Number of
                                                Individuals <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="number_of_individuals"
                                                id="number_of_individuals" placeholder="Number of Individuals" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="price">Price <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="number" name="price" id="price"
                                                placeholder="Price" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="about">About <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="about" id="about" placeholder="About" cols="3" rows="3"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="included">Included <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="included" id="included" placeholder="Included" cols="3" rows="3"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="excluded">Excluded <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="excluded" id="excluded" placeholder="Excluded" cols="3" rows="3"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_1">Tour Plan: Day 1
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_1" id="tour_plan_day_1"
                                                placeholder="Tour Plan: Day 1 (Optional)" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_2">Tour Plan: Day 2
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_2" id="tour_plan_day_2"
                                                placeholder="Tour Plan: Day 2 (Optional)" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_3">Tour Plan: Day 3
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_3" id="tour_plan_day_3"
                                                placeholder="Tour Plan: Day 3 (Optional)" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_4">Tour Plan: Day 4
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_4" id="tour_plan_day_4"
                                                placeholder="Tour Plan: Day 4 (Optional)" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_5">Tour Plan: Day 5
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_5" id="tour_plan_day_5"
                                                placeholder="Tour Plan: Day 5 (Optional)" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="policy">Policy <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="policy" id="policy" placeholder="Policy" cols="3"
                                                rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_primary">Image (Primary) <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_primary" id="image_primary" placeholder="Image (Primary)"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_1">Image (Secondary
                                                1) <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_1" id="image_secondary_1"
                                                placeholder="Image (Secondary 1)" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_2">Image (Secondary
                                                2) <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_2" id="image_secondary_2"
                                                placeholder="Image (Secondary 2)" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_3">Image (Secondary
                                                3) <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_3" id="image_secondary_3"
                                                placeholder="Image (Secondary 3)" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex float-end gap-10 mt-10">
                                            <button class="btn-primary-fill" type="submit">
                                                Create
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
