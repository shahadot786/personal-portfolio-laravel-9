@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Edit Video</h4>

                            <form method="post" action="{{ route('video.update', ['id' => $videos->id]) }}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="title" type="text"
                                            value="{{ $videos->title }}" required>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="description"
                                            type="text" value="{{ $videos->description }}" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Video Url</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="url" type="text"
                                            value="{{ $videos->url }}" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Video">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
