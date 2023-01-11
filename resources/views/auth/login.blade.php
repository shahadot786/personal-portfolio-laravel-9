<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin & Dashboard" />
    <meta name="author" content="shr_creation" />
    <!-- App favicon -->
    <link href="{{ asset('backend/assets/images/favicon.ico') }}" rel="shortcut icon">

    <!-- Bootstrap Css -->
    <link id="bootstrap-style" type="text/css" href="{{ asset('backend/assets/css/bootstrap.min.css') }}"
        rel="stylesheet" />
    <!-- Icons Css -->
    <link type="text/css" href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" />
    <!-- App Css-->
    <link id="app-style" type="text/css" href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card bg-dark">
                <div class="card-body">

                    <div class="mt-4 text-center">
                        <div class="mb-3">
                            <a class="auth-logo" href="{{ route('dashboard') }}">
                                <img class="logo-dark mx-auto" src="{{ asset('logo/shr_creation.png') }}" alt=""
                                    height="80">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted font-size-18 text-center"><b>Sign In</b></h4>

                    <div class="p-3">

                        <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control bg-dark text-white" id="username" name="username"
                                        type="text" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control bg-dark text-white" id="password" name="password"
                                        type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3 mt-3 pt-1 text-center">
                                <div class="col-12">
                                    <button class="btn btn-danger w-100 waves-effect waves-light" type="submit">Log
                                        In</button>
                                </div>
                            </div>

                            <div class="form-group row mb-0 mt-2">
                                <div class="col-sm-7 mt-3">
                                    <a class="text-muted" href="{{ route('password.request') }}"><i
                                            class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                                <div class="col-sm-5 mt-3">
                                    <a class="text-muted" href="{{ route('register') }}"><i
                                            class="mdi mdi-account-circle"></i> Create an account</a>
                                </div>
                            </div>
                            <div class="form-group row d-none mt-2 mb-0">
                                <div class="col-12 mt-3 text-center">
                                    <h5><a href="#">HOME</a></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
