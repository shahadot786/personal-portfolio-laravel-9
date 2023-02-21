@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            @php
                $videos = App\Models\Video::all();
            @endphp
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Videos</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                                <li class="breadcrumb-item active">Videos</li>
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
                                    class="text-white" href="{{ route('video.add') }}">Add Video</a></button>

                            <h4 class="card-title mb-4">Videos</h4>

                            <div class="table-responsive">
                                <table class="table-editable table-nowrap table-edits table align-middle">
                                    <thead class="border-bottom border-1 border-secondary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Video Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-bottom border-1 border-secondary">
                                        @foreach ($videos as $video)
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{ $video->id }}</td>
                                                <td data-field="title">{{ $video->title }}</td>
                                                <td data-field="institute">{{ $video->description }}</td>
                                                <td data-field="institute">{{ $video->url }}</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit"
                                                        href="{{ route('video.edit', ['id' => $video->id]) }}"
                                                        title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit"
                                                        href="{{ route('video.delete', ['id' => $video->id]) }}"
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
