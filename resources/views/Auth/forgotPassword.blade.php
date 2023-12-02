<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

<head>
    <!--  Title -->
    <title>{{ $title }}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="../../dist/css/style.min.css" />

    <style>
        #toast-container {
            top: 15px;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-8 col-xxl-9">
                        <a href="index-2.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                                width="180" alt="">
                        </a>
                        <div class="d-none d-lg-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg"
                                alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    @if (request()->routeIs('forgotPassword'))
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                                <div class="d-flex align-items-center w-100 h-100">
                                    <div class="card-body">
                                        <div class="mb-5">
                                            <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                                            <p class="mb-0 ">
                                                Please enter the email address associated with your account and We will
                                                email you a link to reset your password.
                                            </p>
                                        </div>
                                        <form action="{{ route('sendResetLink') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    address</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Forgot
                                                Password</button>
                                            <a href="{{ route('login') }}"
                                                class="btn btn-light-primary text-primary w-100 py-8">Back to Login</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif (request()->routeIs('password.reset'))
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                                <div class="d-flex align-items-center w-100 h-100">
                                    <div class="card-body">
                                        <div class="mb-5">
                                            <h2 class="fw-bolder fs-7 mb-3">Perbarui password anda</h2>
                                            <p class="mb-0 ">
                                                Reset password untuk <span class="fw-bold">{{ request()->email }}</span>. Silahkan perbarui password
                                                anda, <a href="{{route('forgotPassword')}}">Klik disini jika ingin mengganti email tertuju</a>.
                                            </p>
                                        </div>
                                        <form action="{{ route('password.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="token" value="{{request()->token}}">
                                            <input type="hidden" name="email" value="{{request()->email}}">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Password baru</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    name="password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Konfirmasi
                                                    password</label>
                                                <input type="password"
                                                    class="form-control @error('confirmPassword') is-invalid @enderror"
                                                    id="exampleInputEmail2" aria-describedby="emailHelp"
                                                    name="confirmPassword">
                                                @error('confirmPassword')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Forgot
                                                Password</button>
                                            <a href="{{ route('login') }}"
                                                class="btn btn-light-primary text-primary w-100 py-8">Back to Login</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <!--  Import Js Files -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <script src="../../dist/js/custom.js"></script>

    <script src="{{ asset('dist/js/plugins/toastr-init.js') }}"></script>
    <script>
        toastr.options = {
            "positionClass": "toast-top-center",
            "fadeIn": 300,
            "fadeOut": 1000,
            "timeOut": 5000,
        };
        @if (session()->has('error'))
            toastr.error('{{ session('error') }}');
        @elseif (session()->has('success'))
            toastr.success('{{ session('success') }}');
        @endif
    </script>

</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

</html>
