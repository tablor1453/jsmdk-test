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
    <div class="container h-100 py-4">
      <div class="row justify-content-center align-items-center pt-5">
        <div class="col-7">
          <form action="" method="post">
            <div class="row g-3 align-items-center mb-2">
              <div class="col-2">
                <label for="kelurahan" class="col-form-label">Kelurahan</label>
              </div>
              <div class="col-5">
                <input type="text" id="kelurahan" class="form-control border-dark">
              </div>
              {{-- <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Must be 8-20 characters long.
                </span>
              </div> --}}
            </div>
            <div class="row g-3 align-items-center mb-2">
              <div class="col-2">
                <label for="kecamatan" class="col-form-label">Kecamatan</label>
              </div>
              <div class="col-5">
                <input type="text" id="kecamatan" class="form-control border-dark" name="kecamatan">
              </div>
              {{-- <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Must be 8-20 characters long.
                </span>
              </div> --}}
            </div>
            <div class="row g-3 align-items-center mb-2">
              <div class="col-2">
                <label for="kecamatan" class="col-form-label">Kota</label>
              </div>
              <div class="col-5">
                <input type="text" id="kota" class="form-control border-dark" name="kota">
              </div>
              {{-- <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Must be 8-20 characters long.
                </span>
              </div> --}}
            </div>
            <div class="d-grid gap-2 d-md-block mt-4">
              <button class="btn btn-primary" type="submit">Simpan</button>
              <button class="btn btn-outline-dark" type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>