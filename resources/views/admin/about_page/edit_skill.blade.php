@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Update Skills</h4>

                            <form method="post" action="{{ route('update.skill', ['id' => $skills->id]) }}">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Skill Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="skill_name" type="text"
                                            value="{{ $skills->skill_name }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Skill Progress</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="skill_progress"
                                            type="text" value="{{ $skills->skill_progress }}">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Skill">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
