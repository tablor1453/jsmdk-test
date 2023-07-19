<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    body{
      /* height: 100vh; */
    }
  </style>
</head>

<body class="vh-100">
  <div class="container-fluid h-100">
    <div class="col-12"></div>
    <div class="row justify-content-center pt-5">
      <div class="col-12 col-lg-4">
        <form action="{{ route('patient.store') }}" method="post">
          @method('post')
          @csrf
          <h2>Input Pasien</h2>
          <div class="row g-3 align-items-center mt-2 mt-lg-4 mb-2">
            <label for="name-patient" class="col-lg-3 col-form-label mt-0">Nama</label>
            <div class="col mt-0 mt-lg-2">
              <input type="text" id="name-patient" class="form-control border-dark" name="name" placeholder="Masukan nama pasien">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">No Telepon</label>            
            <div class="col mt-0 mt-lg-2">
              <input type="text" id="kecamatan" class="form-control border-dark" name="phone" placeholder="Masukan nomor telepon">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Tanggal Lahir</label>
            <div class="col mt-0 mt-lg-2">
              {{-- <input type="text" id="date" class="form-control border-dark" name="alamat" placeholder="Masukan alamat"> --}}
              {{-- <div class="input-group date" id="datepicker">
                <input type="text" class="form-control border-dark" id="date">
                <span class="input-group-append">
                <span class="input-group-text bg-light d-block border-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </span>
                </span>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
              </div> --}}
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" id="date" name="birth-date"/>
                <span class="input-group-append">
                  <span class="input-group-text bg-light d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                  </span>
                </span>
              </div>
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
            {{-- <div class="col-5">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" id="date"/>
                <span class="input-group-append">
                  <span class="input-group-text bg-light d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                  </span>
                </span>
              </div>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Jenis Kelamin</label>
            <div class="col mt-0 mt-lg-2">
              {{-- <input type="text" id="kota" class="form-control border-dark" name="kota" placeholder="Masukan alamat"> --}}
              <div class="form-check form-check-inline">
                <input class="form-check-input border-dark" type="radio" name="gender" id="male" value="1">
                <label class="form-check-label" for="male">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input border-dark" type="radio" name="gender" id="female" value="2">
                <label class="form-check-label" for="female">Perempuan</label>
              </div>
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Alamat</label>
            <div class="col mt-0 mt-lg-2">
              <textarea class="form-control border-black" name="address" placeholder="Masukan alamat" style="height: 100px"></textarea>
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">RT</label>
            <div class="col-2 mt-0 mt-lg-2">
              <input type="text" id="kota" class="form-control border-dark" name="rt">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">RW</label>
            <div class="col-2 mt-0 mt-lg-2">
              <input type="text" id="kota" class="form-control border-dark" name="rw">
            </div>
            {{-- <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div> --}}
          </div>
          <div class="row g-3 align-items-center my-2">
            <label for="kecamatan" class="col-lg-3 col-form-label mt-0">Kelurahan</label>
            <div class="col mt-0 mt-lg-2">
              <select class="form-select" aria-label="Pilih kelurahan" name="kelurahan">
                <option disabled selected>Pilih kelurahan</option>
                @foreach ($kelurahan as $data)
                  <option value="{{ $data->id_kelurahan }}">{{ $data->kelurahan }}</option>
                @endforeach
              </select>
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
      <div class="col-12 col-lg-7 mt-3 mt-md-0">
        <h2>Daftar Pasien</h2>
        <table class="table mt-lg-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID Pasien</th>
              <th scope="col">Nama</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @isset($datas)
            @foreach ($datas as $data)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $data->id_patient }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->kelurahan->kelurahan ?? '-' }}</td>
                <td>
                  <form action="{{ route('patient.delete', $data->id_patient)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm px-2">
                      Hapus
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
            @endisset
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(function(){
    $('#datepicker').datepicker({ format: 'yyyy-mm-dd' });
  });
</script>
</html>