@extends($user->role == 'admin' ? 'partials.adminLayout.master' : 'partials.userLayout.master')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css">
@endsection

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Profile</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted"
                                    href="{{ $user->role == 'admin' ? route('admin.home') : route('user.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                    aria-labelledby="pills-account-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Profile</h5>
                                    <p class="card-subtitle mb-4">Change your profile picture from here</p>
                                    <form id="upload-photo" action="{{ route('profile.update-photo') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="text-center">
                                            <img id="profile-image"
                                                src="{{ asset($user->avatar ? 'storage/' . $user->avatar : 'dist/images/profile/user-1.jpg') }}"
                                                alt="" class="rounded-circle cursor-pointer" width="120"
                                                height="120" style="object-fit: cover">
                                            <input id="photo-profile" type="file" src="" alt=""
                                                name="photoProfile" class="d-none">
                                            <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                                <button id="upload-button" type="button"
                                                    class="btn btn-primary">Upload</button>
                                                <button type="button" id="reset-image"
                                                    class="btn btn-outline-danger">Reset</button>
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Password</h5>
                                    <p class="card-subtitle mb-4">To change your password please confirm here</p>
                                    <form action="{{ route('profile.update-password') }}" method="POST"
                                        id="change-password-form">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Current
                                                Password</label>
                                            <input type="password" class="form-control" id="current-pass" name="currentPass"
                                                value="">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">New
                                                Password</label>
                                            <input type="password" class="form-control" id="new-pass" name="newPass"
                                                value="">
                                        </div>
                                        <div class="">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="confirm-pass"
                                                name="newPass_confirmation" value="">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                            <button id="update-pass-button" type="submit"
                                                class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card w-100 position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Personal Details</h5>
                                    <p class="card-subtitle mb-4">To change your personal detail , edit and save from here
                                    </p>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Nama</label>
                                                    <input type="text" class="form-control" id="username-input"
                                                        placeholder="Isi nama anda" value="{{ $user->name }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Email</label>
                                                    <input type="email" class="form-control" id="email-input"
                                                        placeholder="Masukkan email anda" value="{{ $user->email }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Nickname</label>
                                                    <input type="text" class="form-control complex-colorpicker"
                                                        id="exampleInputtext" placeholder="Isi Nickname">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Tanggal Lahir</label>
                                                    <input type="text" class="form-control complex-colorpicker"
                                                        id="date-input" placeholder="YYYY/MM/DD"
                                                        value="{{ Auth::user()->tanggal_lahir ?: '' }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                                    <button class="btn btn-primary">Save</button>
                                                    <button class="btn btn-light-danger text-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.js"></script>

    <script>
        flatpickr("#date-input", {
            dateFormat: "y-m-d",
            altInput: true,
            altFormat: "y-m-d",
            maxDate: "10-10-2010",
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#profile-image').on('click', function() {
                var inputFile = $('#photo-profile');

                inputFile.on('change', function(e) {
                    var file = e.target.files[0];
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $('#profile-image').attr('src', event.target.result);
                    };

                    reader.readAsDataURL(file);
                });

                inputFile.click();
            });

            // Ajax update photo
            $('#upload-button').on('click', function() {
                var formData = new FormData($('#upload-photo')[0]);
                $('.preloader').show();

                $.ajax({
                    type: 'POST',
                    url: $('#upload-photo').attr('action'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('.preloader').hide();
                            toastr.success(response.success);
                        } else {
                            $('.preloader').hide();
                            toastr.error(response.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        $('.preloader').hide();
                        var errorMessage = 'Terjadi kesalahan dalam permintaan';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        toastr.error(errorMessage);
                    }
                });
            });

            //Ajax update password
            $('#change-password-form').on('submit', function(e) {
                e.preventDefault();

                var currentPass = $('#current-pass').val();
                var newPassword = $('#new-pass').val();
                var confirmPassword = $('#confirm-pass').val();

                if (!currentPass) {
                    toastr.error('Kata sandi saat ini harus diisi');
                    return;
                } else if (!newPassword) {
                    toastr.error('Kata sandi baru harus diisi');
                    return;
                } else if (!confirmPassword) {
                    toastr.error('Konfirmasi sandi harus diisi');
                    return;
                } else if (newPassword !== confirmPassword) {
                    toastr.error('Kata sandi baru dan konfirmasi tidak cocok');
                    return;
                }

                var form = $('#change-password-form')[0];
                var formData = new FormData(form);

                $('.preloader').show();

                $.ajax({
                    type: 'POST',
                    url: $('#change-password-form').attr('action'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('.preloader').hide();
                            toastr.success(response.success);
                            $('#current-pass').val('');
                            $('#new-pass').val('');
                            $('#confirm-pass').val('');
                        } else {
                            $('.preloader').hide();
                            toastr.error(response.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        $('.preloader').hide();
                        var errorMessage = 'Terjadi kesalahan dalam permintaan';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        toastr.error(errorMessage);
                    }
                });
            });

            var originalImageSrc = $('#profile-image').attr('src');

            $('#reset-image').on('click', function() {
                $('#profile-image').attr('src', originalImageSrc);
            });

        });
    </script>
@endsection
