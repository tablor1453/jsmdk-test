<?php

namespace App\Services\Kelurahan;

use App\Models\Administration;
use App\Repositories\Kelurahan\KelurahanRepository;
use Illuminate\Http\Request;

class KelurahanServiceImplement implements KelurahanService
{
  private $_kelurahanRepository;

  public function __construct(KelurahanRepository $kelurahanRepository)
  {
    $this->_kelurahanRepository = $kelurahanRepository;
  }

  public function add(Request $request)
  {
    $data['kelurahan'] = $request->kelurahan;
    $data['kecamatan'] = $request->kecamatan;
    $data['kota'] = $request->kota;

    return $this->_kelurahanRepository->add($data);;
  }

  public function edit()
  {
    return;
  }

  public function delete(Administration $modelKelurahan)
  {
    return $this->_kelurahanRepository->delete($modelKelurahan);
  }

  public function getData()
  {
    return $this->_kelurahanRepository->getData();
  }
}
