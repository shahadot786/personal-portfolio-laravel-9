@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Update Home Section</h4>

                            <form method="post" action="{{ route('update.slider',$homeslide->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input name="id" type="hidden" value="{{ $homeslide->id }}">

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="example-text-input" name="title" type="text"
                                            value="{{ $homeslide->title }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Short Title </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="example-text-input" name="short_title"
                                            type="text" value="{{ $homeslide->short_title }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Video URL </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="example-text-input" name="video_url" type="text"
                                            value="{{ $homeslide->video_url }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Slider Image </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="home_slide" type="file">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input"> </label>
                                    <div class="col-sm-10">
                                        <img class="avatar-lg rounded" id="showImage"
                                            src="{{ !empty($homeslide->home_slide) ? url($homeslide->home_slide) : url('upload/home_about/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Slide">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
