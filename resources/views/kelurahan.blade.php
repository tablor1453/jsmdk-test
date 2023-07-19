<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    body{
      /* height: 100vh; */
    }
  </style>
</head>

<body class="vh-100">
  <div class="container-fluid container-lg h-100 py-4">
    <div class="row justify-content-center pt-5 gx-5">
      <div class="col-12 col-lg-4">
        <form action="{{ route('kelurahan.store') }}" method="post">
          @method('post')
          @csrf
          <h2>Input Kelurahan</h2>
          <div class="row g-3 align-items-center mt-2 mt-lg-4 mb-2">
            <label for="kelurahan" class="col-lg-3 col-form-label mt-0">Kelurahan</label>
            <div class="col mt-0 mt-lg-2">
              <input type="text" id="kelurahan" class="form-control border-dark" name="kelurahan" placeholder="Masukan nama kelurahan">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Kecamatan</label>            
            <div class="col mt-0 mt-lg-2">
              <input type="text" id="kecamatan" class="form-control border-dark" name="kecamatan" placeholder="Masukan nama kecamatan">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Kota</label>
            <div class="col mt-0 mt-lg-2">
              <input type="text" id="kota" class="form-control border-dark" name="kota" placeholder="Masukan nama kota">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="d-grid gap-3 d-md-block mt-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-outline-dark ms-lg-1" type="reset">Reset</button>
          </div>
        </form>
        @include('alert')
      </div>
      <div class="col-12 col-lg-5 mt-3 mt-md-0">
        <h2>Daftar Kelurahan</h2>
        <table class="table mt-lg-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kota</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $data->kelurahan }}</td>
                <td>{{ $data->kecamatan }}</td>
                <td>{{ $data->kota }}</td>
                <td>
                  <form action="{{ route('kelurahan.delete', $data->id_kelurahan)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm px-2">
                      Hapus
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>