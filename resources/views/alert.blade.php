  @if(session()->has('success'))
    <div class="row mt-3 justify-content-start">
      <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          <strong>{!! session()->get('success')['alertTitle'] !!}</strong>, {!! session()->get('success')['alertMessage'] !!}
          {{-- <strong>Berhasil.</strong> Data kelurahan telah disimpan. --}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif

  @if(session()->has('failed'))
    <div class="row mt-3 justify-content-start">
      <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
          <strong>{!! session()->get('failed')['alertTitle'] !!}</strong>, {{ session()->get('failed')['alertMessage'] }}
          {{-- <strong>Error!</strong> Terjadi kesalahan sistem, silahkan coba kembali. --}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif