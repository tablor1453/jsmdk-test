<?php

namespace App\Repositories\Patient;

use App\Models\Patient;

interface PatientRepository
{
  public function add($data);
  public function edit($data);
  public function delete(Patient $modelPatient);
  public function getData();
}
