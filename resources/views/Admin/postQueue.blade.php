@extends('partials.adminLayout.master')

@section('link')
    <style>
        #card-queue {
            height: 300px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid note-has-grid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Post</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="{{ url()->current() }}">Post Queue</a>
                                </li>
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
        <div class="tab-content">
            <div id="note-full-container" class="note-has-grid row">
                @foreach ($postQueue as $data)
                    <div class="col-md-4 single-note-item all-category note-social" id="card_{{ $data->id }}">
                        <div class="card card-body" id="card-queue">
                            <span class="side-stick"></span>
                            <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">
                                {{ $data->user->name }}</h6>
                            <p class="note-date fs-2">{{ $data->created_at->translatedFormat('l, j F Y') }}</p>
                            <div class="note-content">
                                <p class="note-inner-content"
                                    data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                    from : {{ $data->from }}</p>
                                <p class="note-inner-content"
                                    data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                    To : {{ $data->to }}</p>
                                <p class="note-inner-content"
                                    data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                    Message : {{ $data->message }}</p>
                                @if ($data->photo)
                                    <p class="note-inner-content"
                                        data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                        <button
                                            class="btn btn-primary text-capitalize see-image-btn d-flex align-items-center gap-2"
                                            data-image="{{ asset('storage/' . $data->photo) }}"
                                            data-name="{{ $data->user->name }}">
                                            <span class="spinner-border text-white"
                                                style="display: none; height: 15px; width: 15px"></span>
                                            <span>Lihat Gambar</span>
                                        </button>
                                    </p>
                                @endif
                            </div>
                            <div class="d-flex align-items-center mt-auto">
                                {{-- reject here! --}}
                                <i data-id="{{ $data->id }}"
                                    class="ti ti-trash cursor-pointer fs-4 text-danger reject-btn"></i>
                                <div class="ms-auto">
                                    {{-- Accept Here! --}}
                                    <form action="">
                                        <i class="ti ti-check fs-4 text-success cursor-pointer"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal Image -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalName"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="imageModalSrc" src="" alt="Gambar" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        {{-- Reject Modal --}}
        <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rejectModalLabel">Alasan Penolakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.reject-post-queue', ['id' => 'id']) }}" method="POST" id="rejectForm">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="form-check mb-1">
                                <input class="form-check-input cursor-pointer" type="radio" name="rejectReason"
                                    id="reasonHatred" value="Ujaran Kebencian">
                                <label class="form-check-label cursor-pointer" for="reasonHatred">Ujaran Kebencian</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input cursor-pointer" type="radio" name="rejectReason"
                                    id="reasonSpam" value="Spam">
                                <label class="form-check-label cursor-pointer" for="reasonSpam">Spam</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input cursor-pointer" type="radio" name="rejectReason"
                                    id="reasonInappropriate" value="Mengandung Konten Vulgar">
                                <label class="form-check-label cursor-pointer" for="reasonInappropriate">Mengandung Konten
                                    Vulgar</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" id="rejectBtn">Tolak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Add notes -->
        <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header bg-primary">
                        <h6 class="modal-title text-white">Add Notes</h6>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="notes-box">
                            <div class="notes-content">
                                <form action="javascript:void(0);" id="addnotesmodalTitle">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="note-title">
                                                <label>Note Title</label>
                                                <input type="text" id="note-has-title" class="form-control"
                                                    minlength="25" placeholder="Title" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="note-description">
                                                <label>Note Description</label>
                                                <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button id="btn-n-add" class="btn btn-primary" disabled>Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(() => {
            const seeImage = (button) => {
                let activeButton = $(button);
                let name = $(activeButton).data('name');
                let imageSrc = $(activeButton).data('image');

                activeButton.find('.spinner-border').show();

                setTimeout(() => {
                    $('#imageModalName').text("Preview gambar dari " + name);
                    $('#imageModalSrc').attr('src', imageSrc);

                    $('#imageModalSrc').on('load', function() {
                        activeButton.find('.spinner-border').hide();

                        $('#imageModal').modal('show');
                    });
                }, 300);
            };

            $('.see-image-btn').on('click', (e) => {
                seeImage(e.currentTarget);
            });

            $(function() {
                $('.reject-btn').on('click', function(event) {
                    let currentPost = $(event.currentTarget);
                    let postId = currentPost.data('id');

                    $('#rejectModal').modal('show');
                    // Menghapus event handler 'submit' sebelumnya
                    $('#rejectForm').off('submit').on('submit', (e) => {
                        e.preventDefault();

                        let rejectReason = $('input[name="rejectReason"]:checked').val();

                        if (!rejectReason) {
                            toastr.warning('Alasan penolakan wajib di isi!');
                            return;
                        }

                        let form = $(e.currentTarget);
                        var formData = new FormData(form[0]);

                        $('.preloader').show();

                        $.ajax({
                            type: 'POST',
                            url: form.attr('action').replace('/id', `/${postId}`),
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if (response.success) {
                                    $('#card_' + postId).remove();
                                    $('#rejectModal').modal('hide');
                                    $('input[name="rejectReason"]').prop('checked', false);

                                    setTimeout(() => {
                                        $('.preloader').hide();
                                        toastr.success(response
                                        .success);
                                    }, 500);
                                } else {
                                    $('.preloader').hide();
                                    toastr.error(response.error);
                                }
                            },
                            error: function(xhr, status, error) {
                                $('.preloader').hide();
                                var errorMessage =
                                    'Terjadi kesalahan dalam permintaan';
                                if (xhr.responseJSON && xhr.responseJSON
                                    .message) {
                                    errorMessage = xhr.responseJSON.message;
                                }
                                toastr.error(errorMessage);
                            }
                        });
                    });
                });
            });
        });
    </script>
@endsection
