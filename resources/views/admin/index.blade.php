@extends('admin.admin_master')
@section('admin')
    <div class="page-content bg-dark">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                        @php
                            $id = Auth::user()->id;
                            $adminData = App\Models\User::find($id);
                            $totalSkills = App\Models\Skills::count();
                            $totalTrainings = App\Models\Training::count();
                            $totalEducations = App\Models\Education::count();
                        @endphp
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.profile') }}">{{ $adminData->username }}</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Products</p>
                                    <h2 class="mb-2">{{ $totalSkills }}</h2>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="me-1 align-middle"></i></span></p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shield-cross-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Trainings</p>
                                    <h2 class="mb-2">{{ $totalTrainings }}</h2>
                                    <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i
                                                class="me-1 align-middle"></i></span></p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-briefcase-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Educations</p>
                                    <h2 class="mb-2">{{ $totalEducations }}</h2>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="me-1 align-middle"></i></span></p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-archive-drawer-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Blogs</p>
                                    <h2 class="mb-2">25</h2>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="me-1 align-middle"></i></span></p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-contacts-book-2-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" href="#"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>

                                </div>

                                <h4 class="card-title mb-4">Latest Blogs</h4>

                                <div class="table-responsive">
                                    <table class="table-centered table-hover table-nowrap mb-0 table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th style="width: 120px;">Salary</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Web Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success me-2 align-middle"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    04 Apr, 2021
                                                </td>
                                                <td>$42,450</td>
                                            </tr>
                                            <!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>

        </div>
    @endsection
