@extends('partials.userLayout.master')

@section('style')
@endsection

@section('content')
    {{-- Header --}}
    <div class="card w-100 bg-light-info overflow-hidden shadow-none">
        <div class="card-body py-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <h5 class="fw-semibold mb-9 fs-5">Halo! rekku {{ $user->name }}</h5>
                    <p class="mb-9">
                        Kirim pesan menfess mu sekarang!
                    </p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-post-modal">Coba
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
    {{-- Header --}}

    {{-- Card post --}}
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
    {{-- Card post --}}

    {{-- Modal Create Post --}}
    <div id="create-post-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
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
                    <form action="{{ route('user.request-post') }}" class="ps-3 pr-3" method="POST" id="request-post-form">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="dari" class="form-label">From :</label>
                            <input class="form-control" type="name" id="from-input" placeholder="Seseorang"
                                name="from" />
                        </div>
                        <div class="mb-3">
                            <label for="untuk" class="form-label">To :</label>
                            <input class="form-control" type="name" id="to-input" placeholder="Kamu yang lucu"
                                name="to" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Message :</label>
                            <textarea class="form-control mb-4" id="message-input" rows="5" placeholder="ihacoy kak >_<" name="message"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFileLg" class="form-label">Masukkan foto jika ada (Opsional)</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="photo"
                                accept="image/*" />
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check-faq" />
                                <label class="form-check-label" for="customCheck1">Saya setuju
                                    <a data-bs-toggle="modal" data-bs-target="#syarat-dan-ketentuan"
                                        class="text-primary cursor-pointer">Syarat dan Ketentuannya
                                    </a>
                                </label>
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
        </div>
    </div>
    {{-- Modal Create Post --}}

    {{-- Modal syarat dan ketentuan --}}
    <div id="syarat-dan-ketentuan" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3">
                        <h4>SYARAT DAN KETENTUAN MENFESS</h4>
                        <div class="container">
                            <h5>Konten Menfess:</h5>
                            <p>
                                - Menfess yang disampaikan harus bersifat positif dan tidak mengandung konten yang dapat
                                merugikan
                                atau merugikan pihak lain.
                                <br>
                                - Dilarang keras menyampaikan informasi palsu atau menyesatkan.
                            </p>

                            <h5>Bahasa dan Etika:</h5>
                            <p>
                                - Gunakan bahasa yang sopan dan tidak mengandung unsur provokatif, rasis, atau merendahkan.
                                <br>
                                - Dilarang menggunakan kata-kata kasar, vulgar, atau merujuk kepada identitas pribadi.
                            </p>

                            <h5>Kepatuhan Hukum:</h5>
                            <p>
                                - Pastikan menfess yang disampaikan mematuhi hukum dan peraturan yang berlaku.
                            </p>

                            <h5>Pertanggungjawaban:</h5>
                            <p>
                                - Penulis menfess bertanggung jawab sepenuhnya atas isinya dan konsekuensi yang mungkin
                                timbul
                                dari
                                penyalahgunaan.
                            </p>

                            <h5>Moderasi:</h5>
                            <p>
                                - Admin berhak untuk tidak mempublikasikan atau menghapus menfess yang melanggar syarat
                                dan
                                ketentuan ini tanpa pemberitahuan sebelumnya.
                            </p>

                            <h5>Perubahan Syarat dan Ketentuan:</h5>
                            <p>
                                - Admin berhak untuk mengubah syarat dan ketentuan ini tanpa pemberitahuan sebelumnya.
                                Pengguna diharapkan untuk secara rutin memeriksa halaman syarat dan ketentuan.
                            </p>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-light-info text-info font-medium" id="agree-button" data-bs-toggle="modal"
                            data-bs-target="#create-post-modal" type="button">
                            Saya setuju
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal syarat dan ketentuan --}}
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#agree-button').on('click', function() {
                $('#check-faq').prop('checked', true);
            });

            $('#request-post-form').on('submit', function(e) {
                e.preventDefault();

                var from = $('#from-input').val();
                var to = $('#to-input').val();
                var message = $('#message-input').val();


                if (!from) {
                    toastr.warning('Input from tidak boleh kosong!');
                    return;
                } else if (from.length > 30) {
                    toastr.warning('Input from maks 30 karakter!');
                    return;
                } else if (!to) {
                    toastr.warning('Input to tidak boleh kosong!');
                    return;
                } else if (to.length > 30) {
                    toastr.warning('Input to maks 30 karakter!');
                    return;
                } else if (!message) {
                    toastr.warning('Input message tidak boleh kosong!');
                    return;
                } else if (message.length > 150) {
                    toastr.warning('Input message maks 30 karakter!');
                    return;
                } else if ($('#check-faq').prop('checked') === false) {
                    toastr.warning('Mohon setujui syarat dan ketentuan sebelum post!');
                    return;
                }

                var form = $('#request-post-form')[0];
                var formData = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: $('#request-post-form').attr('action'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('#create-post-modal').modal('hide');
                            $('#from-input').val('');
                            $('#to-input').val('');
                            $('#message-input').val('');
                            $('#formFileLg').val('');
                            $('#check-faq').prop('checked', false);
                            toastr.success(response.success);
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = 'Terjadi kesalahan dalam permintaan';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        toastr.error(errorMessage);
                    }
                });
            });
        });
    </script>
@endsection
