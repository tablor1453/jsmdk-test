<?php

namespace App\Repositories\Kelurahan;

use App\Models\Administration;
use Illuminate\Http\Request;

interface KelurahanRepository
{
  public function add($data);
  public function edit($data);
  public function delete(Administration $modelKelurahan);
  public function getData();
}
