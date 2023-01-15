@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Add Training</h4>

                            <form method="post" action="{{ route('store.traning') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="title" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Institute</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="institute" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Topics</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="topics" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Country</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="country" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Location</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="location" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Duration</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="duration" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Start Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="start_date" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">End Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="end_date" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Add Training">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
