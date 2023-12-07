@extends('partials.userLayout.master')

@section('content')
    <div class="card w-100 bg-light-info overflow-hidden shadow-none">
        <div class="card-body py-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <h5 class="fw-semibold mb-9 fs-5">Halo! rekku {{ $user->name }}</h5>
                    <p class="mb-9">
                        Kirim pesan menfess mu sekarang!
                    </p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Coba
                        Sekarang</button>
                </div>
                <div class="col-sm-5">
                    <div class="position-relative mb-n7 text-end">
                        <img src="../../dist/images/backgrounds/welcome-bg2.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="signup-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index-2.html" class="text-success">
                            <span>
                                <img src="{{ asset('dist/images/logo2.png') }}" class="me-3" width="80"
                                    alt="" />
                            </span>
                        </a>
                    </div>

                    <form class="ps-3 pr-3" action="#">
                        <div class="mb-3">
                          <label for="dari" class="form-label">Dari</label>
                            <input class="form-control" type="name" id="dari" required=""
                                placeholder="Seseorang" />
                        </div>

                        <div class="mb-3">
                          <label for="untuk" class="form-label">Untuk</label>
                            <input class="form-control" type="name" id="untuk" required=""
                                placeholder="Kamu yang lucu" />
                        </div>

                        <div class="mb-3">
                          <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control mb-4" id="pesan" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFileLg" class="form-label">Masukkan foto jika ada (Optional)</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file" />
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck1" />
                                <label class="form-check-label" for="customCheck1">Saya setuju
                                    <a href="#">Syarat dan Ketentuannya</a></label>
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-light-info text-info font-medium" type="submit">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                    <a href="{{ route('user.detail-post') }}"><img src="../../dist/images/poto.png"
                            class="card-img-top rounded-0" style="" alt="..."></a>
                    <span
                        class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                        Menit Lalu</span>
                </div>
                <div class="card-body p-4">
                    <a class="d-block my-0 fs-5 text-dark fw-semibold" href="#">Ayo bu, bentar lagi kelas 12 sudah
                        lulus</a>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,125</div>
                        <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>4</div>
                        <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Senin, Dec
                            23</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
