@extends('layouts.admin_dashboard')
@section('title', __('Edit Cruise') . ' | ')

@section('dashboard_content')
    <div class="users-dashboard-content flex-fill card section-bg-two border-0">
        <!-- Dashboard Card S t a r t -->
        <div class="dashboard-card mb-24">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="small-tittle-two pb-0">
                        <h5 class="title font-600 text-capitalize mb-0">Edit Cruise</h5>
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
                            <form action="{{ route('admin.cruise.update', $cruise) }}" method="POST"
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
                                                value="{{ $cruise->title }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="location_id">Location <span
                                                    class="text-danger">*</span></label>
                                            <!-- Select2 -->
                                            <select class="select2 select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true" name="location_id" id="location_id" required>
                                                <option value=""></option>
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}" @selected($location->id == $cruise->location_id)>{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="duration">Duration <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="duration" id="duration"
                                                value="{{ $cruise->duration }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="number_of_individuals">Number of
                                                Individuals <span class="text-danger">*</span></label>
                                            <input class="contact-input" type="text" name="number_of_individuals"
                                                id="number_of_individuals" value="{{ $cruise->number_of_individuals }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="price">Price <span
                                                    class="text-danger">*</span></label>
                                            <input class="contact-input" type="number" name="price" id="price"
                                                value="{{ $cruise->price }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="about">About <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="about" id="about" cols="3" rows="3"
                                                required>{{ $cruise->about }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="included">Included <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="included" id="included" cols="3"
                                                rows="3" required>{{ $cruise->included }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="excluded">Excluded <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="excluded" id="excluded" cols="3"
                                                rows="3" required>{{ $cruise->excluded }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_1">Tour Plan: Day 1
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_1" id="tour_plan_day_1"
                                                cols="3" rows="3">{{ $cruise->tour_plan_day_1 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_2">Tour Plan: Day 2
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_2" id="tour_plan_day_2"
                                                cols="3" rows="3">{{ $cruise->tour_plan_day_2 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_3">Tour Plan: Day 3
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_3" id="tour_plan_day_3"
                                                cols="3" rows="3">{{ $cruise->tour_plan_day_3 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_4">Tour Plan: Day 4
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_4" id="tour_plan_day_4"
                                                cols="3" rows="3">{{ $cruise->tour_plan_day_4 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="tour_plan_day_5">Tour Plan: Day 5
                                                (Optional)</label>
                                            <textarea class="contact-textarea" name="tour_plan_day_5" id="tour_plan_day_5"
                                                cols="3" rows="3">{{ $cruise->tour_plan_day_5 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="policy">Policy <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="contact-textarea" name="policy" id="policy" cols="3" rows="3"
                                                required>{{ $cruise->policy }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_primary">Image (Primary)</label>
                                            <input class="contact-input" type="file" accept="image/*" name="image_primary"
                                                id="image_primary">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_1">Image (Secondary
                                                1)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_1" id="image_secondary_1">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_2">Image (Secondary
                                                2)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_2" id="image_secondary_2">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_3">Image (Secondary
                                                3)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_3" id="image_secondary_3">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_4">Image (Secondary
                                                4)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_4" id="image_secondary_4">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_5">Image (Secondary
                                                5)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_5" id="image_secondary_5">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_6">Image (Secondary
                                                6)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_6" id="image_secondary_6">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_7">Image (Secondary
                                                7)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_7" id="image_secondary_7">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_8">Image (Secondary
                                                8)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_8" id="image_secondary_8">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_9">Image (Secondary
                                                9)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_9" id="image_secondary_9">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_10">Image (Secondary
                                                10)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_10" id="image_secondary_10">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_11">Image (Secondary
                                                11)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_11" id="image_secondary_11">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_12">Image (Secondary
                                                12)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_12" id="image_secondary_12">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_13">Image (Secondary
                                                13)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_13" id="image_secondary_13">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form mb-24">
                                            <label class="contact-label" for="image_secondary_14">Image (Secondary
                                                14)</label>
                                            <input class="contact-input" type="file" accept="image/*"
                                                name="image_secondary_14" id="image_secondary_14">
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
