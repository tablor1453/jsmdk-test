<?php

namespace App\Services\Kelurahan;

use App\Models\Administration;
use Illuminate\Http\Request;

interface KelurahanService
{
  public function add(Request $request);
  public function edit();
  public function delete(Administration $modelKelurahan);
  public function getData();
}
