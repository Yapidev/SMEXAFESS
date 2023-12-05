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
                                    <div class="text-center">
                                        <img src="../../dist/images/profile/user-1.jpg" alt=""
                                            class="img-fluid rounded-circle" width="120" height="120">
                                        <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                            <button class="btn btn-primary">Upload</button>
                                            <button class="btn btn-outline-danger">Reset</button>
                                        </div>
                                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Password</h5>
                                    <p class="card-subtitle mb-4">To change your password please confirm here</p>
                                    <form>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Current
                                                Password</label>
                                            <input type="password" class="form-control" id="pass-saat-ini" value="">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">New
                                                Password</label>
                                            <input type="password" class="form-control" id="pass-baru" value="">
                                        </div>
                                        <div class="">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="konfirmasi-pass" value="">
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
                                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Nickname</label>
                                                    <input type="text" class="form-control complex-colorpicker"
                                                        id="exampleInputtext" placeholder="Isi Nickname">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Tanggal Lahir</label>
                                                    <input type="text" class="form-control complex-colorpicker"
                                                        id="date-input" placeholder="YYYY/MM/DD" value="{{Auth::user()->tanggal_lahir ?: ''}}">
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
@endsection
