@extends('partials.userLayout.master')

@section('content')
<div class="row">
    <div class="col-lg-4">
      <div class="card rounded-2 overflow-hidden hover-img">
        <div class="position-relative">
          <a href="javascript:void(0)"><img src="../../dist/images/poto.png" class="card-img-top rounded-0" style="" alt="..."></a>
          <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 Menit Lalu</span>
        </div>
        <div class="card-body p-4">
          <a class="d-block my-0 fs-5 text-dark fw-semibold" href="#">Ayo bu, bentar lagi kelas 12 sudah lulus</a>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,125</div>
            <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>4</div>
            <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Senin, Dec 23</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
