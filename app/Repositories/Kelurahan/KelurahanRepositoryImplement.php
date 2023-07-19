<?php

namespace App\Repositories\Kelurahan;

use App\Models\Administration;
use App\Repositories\Kelurahan\KelurahanRepository;
use Illuminate\Http\Request;

class KelurahanRepositoryImplement implements KelurahanRepository
{
  public function add($data)
  {
    return Administration::create($data);
  }

  public function edit($data)
  {
    return;
  }

  public function delete($modelKelurahan)
  {
    return $modelKelurahan->delete();
  }

  public function getData()
  {
    return Administration::select('id_kelurahan', 'kelurahan', 'kecamatan', 'kota')->get();
  }
}
