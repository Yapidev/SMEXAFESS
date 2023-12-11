@extends('partials.adminLayout.master')

@section('content')
  <div class="container-fluid note-has-grid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8">Post</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index-2.html">Post</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Queue</li>
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
          <div class="col-md-4 single-note-item all-category note-social">
            <div class="card card-body">
              <span class="side-stick"></span>
              <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">{{ $data->user->name }}</h6>
              <p class="note-date fs-2">{{ \Carbon\Carbon::createFromTimestamp(strtotime($data->created_at))->format('d F Y') }}</p>
              <div class="note-content">
                <p class="note-inner-content"
                  data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">{{ $data->message }}</p>
              </div>
              <div class="d-flex align-items-center">
                <a href="javascript:void(0)" class="link me-1">
                  <i class="ti ti-star fs-4 favourite-note"></i>
                </a>
                <a href="javascript:void(0)" class="link text-danger ms-2">
                  <i class="ti ti-trash fs-4 remove-note"></i>
                </a>
                <div class="ms-auto">
                  {{-- Accept Here! --}}
                  <form action="">
                    <i class="ti ti-check text-success cursor-pointer"></i>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Modal Add notes -->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
          <div class="modal-header bg-primary">
            <h6 class="modal-title text-white">Add Notes</h6>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="notes-box">
              <div class="notes-content">
                <form action="javascript:void(0);" id="addnotesmodalTitle">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="note-title">
                        <label>Note Title</label>
                        <input type="text" id="note-has-title" class="form-control" minlength="25"
                          placeholder="Title" />
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
