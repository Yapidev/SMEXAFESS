<!DOCTYPE html>
<html lang="en">

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
                    <div class="col-xl-7 col-xxl-8">
                        <a href="index-2.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                                width="180" alt="">
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg"
                                alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder">Welcome to Smexafess</h2>
                                <p class=" mb-9">Your Admin Dashboard</p>
                                <div class="row">
                                    <div class="col-12 mb-2 mb-sm-0">
                                        <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                                            href="{{ route('redirectToGoogle') }}" role="button">
                                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg"
                                                alt="" class="img-fluid me-2" width="18" height="18">
                                            <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                                        </a>
                                    </div>
                                </div>
                                <div class="position-relative text-center my-4">
                                    <p
                                        class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                                        or sign in with</p>
                                    <span
                                        class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>
                                <form action="{{ route('loginProcess') }}" method="POST"
                                    class="{{ $errors->any() ? '' : 'needs-validation' }}" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="text-email" class="form-label">Email address</label>
                                        <input type="email" class="form-control @error('email')is-invalid @enderror"
                                            id="text-email" value="{{ old('email') }}" name="email" required>
                                        <div class="valid-feedback">Bagus!</div>
                                        <div class="invalid-feedback">
                                            {{ $errors->has('email') ? $errors->first('email') : 'Isi dengan email yang valid!' }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="text-password" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control @error('password')is-invalid @enderror"
                                            id="text-password" name="password" value="{{ old('password') }}" required
                                            minlength="6">
                                        <div class="valid-feedback">Bagus!</div>
                                        <div class="invalid-feedback">
                                            {{ $errors->has('password') ? $errors->first('password') : 'Isi dengan password yang valid dan minimal 6 karakter!' }}
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <a class="text-primary fw-medium" href="{{ route('forgotPassword') }}">Forgot
                                            Password ?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign
                                        In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create
                                            an account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/plugins/toastr-init.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>

    {{-- Toast Notification --}}
    <script>
        toastr.options = {
            "positionClass": "toast-top-center",
            "fadeIn": 300,
            "fadeOut": 1000,
            "timeOut": 3000,
        };
        @if (session()->has('error'))
            toastr.error('{{ session('error') }}');
        @elseif (session()->has('success'))
            toastr.success('{{ session('success') }}');
        @endif
    </script>

    {{-- Prevent Default Function for submittion form --}}
    <script>
        (function() {
            "use strict";
            window.addEventListener(
                "load",
                function() {
                    var forms = document.getElementsByClassName("needs-validation");
                    var validation = Array.prototype.filter.call(
                        forms,
                        function(form) {
                            form.addEventListener(
                                "submit",
                                function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                },
                                false
                            );
                        }
                    );
                },
                false
            );
        })();
    </script>

</body>

</html>
