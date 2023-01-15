@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            @php
                $trainings = App\Models\Training::all();
            @endphp
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">About Skills</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                                <li class="breadcrumb-item active">Training</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <button class="btn btn-dark waves-effect waves-light float-end ms-1" type="button"><a
                                    class="text-white" href="{{ route('about.add_training') }}">Add Training</a></button>

                            <h4 class="card-title mb-4">About Training</h4>

                            <div class="table-responsive">
                                <table class="table-editable table-nowrap table-edits table align-middle">
                                    <thead class="border-bottom border-1 border-secondary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Institute</th>
                                            <th>Topics</th>
                                            <th>Country</th>
                                            <th>Location</th>
                                            <th>Duration</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-bottom border-1 border-secondary">
                                        @foreach ($trainings as $training)
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{ $training->id }}</td>
                                                <td data-field="title">{{ $training->title }}</td>
                                                <td data-field="institute">{{ $training->institute }}</td>
                                                <td data-field="institute">{{ $training->topics }}</td>
                                                <td data-field="institute">{{ $training->country }}</td>
                                                <td data-field="institute">{{ $training->location }}</td>
                                                <td data-field="institute">{{ $training->duration }}</td>
                                                <td data-field="institute">{{ $training->start_date }}</td>
                                                <td data-field="institute">{{ $training->end_date }}</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit"
                                                        href="{{ route('edit.traning', ['id' => $training->id]) }}"
                                                        title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit"
                                                        href="{{ route('delete.traning', ['id' => $training->id]) }}"
                                                        title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
