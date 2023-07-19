<?php

namespace App\Repositories\Kelurahan;

use Illuminate\Http\Request;

interface KelurahanRepository
{
  public function add($data);
  public function edit($data);
  public function delete($id);
  public function getData();
}
