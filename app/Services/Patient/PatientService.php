<?php

namespace App\Services\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;

interface PatientService
{
  public function add(Request $request);
  public function edit();
  public function delete(Patient $modelPatient);
  public function getData();
}
