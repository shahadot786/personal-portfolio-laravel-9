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
                            // $totalProducts = App\Models\Product::count();
                        @endphp
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.profile') }}">{{ $adminData->username }}</a></li>
                                <li class="breadcrumb-item active">Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card">
                <form class="card-header" action="" method="get">
                    <div class="form-row d-flex justify-content-between">
                        <div class="col-md-2">
                            <input class="form-control" name="title" type="text" placeholder="Product Title">
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" id="" name="variant">
                                <option>Choose Varient</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Price Range</span>
                                </div>
                                <input class="form-control" name="price_from" type="text" aria-label="First name"
                                    placeholder="From">
                                <input class="form-control" name="price_to" type="text" aria-label="Last name"
                                    placeholder="To">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" name="date" type="date" placeholder="Date">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary float-right" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

                <div class="card-body">
                    <div class="table-response">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Variant</th>
                                    <th width="150px">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>T-Shirt <br> Created at : 25-Aug-2020</td>
                                    <td>Quality product in low cost</td>
                                    <td>
                                        <dl class="row mb-0" id="variant" style="height: 80px; overflow: hidden">

                                            <dt class="col-sm-3 pb-0">
                                                SM/ Red/ V-Nick
                                            </dt>
                                            <dd class="col-sm-9">
                                                <dl class="row mb-0">
                                                    <dt class="col-sm-4 pb-0">Price : {{ number_format(200, 2) }}</dt>
                                                    <dd class="col-sm-8 pb-0">InStock : {{ number_format(50, 2) }}</dd>
                                                </dl>
                                            </dd>
                                        </dl>
                                        <button class="btn btn-sm btn-link"
                                            onclick="$('#variant').toggleClass('h-auto')">Show more</button>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a class="btn btn-success" href="#">Edit</a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <p>Showing 1 to 10 out of 100</p>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
