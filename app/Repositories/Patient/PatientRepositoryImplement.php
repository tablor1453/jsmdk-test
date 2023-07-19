<?php

namespace App\Repositories\Patient;

use App\Models\Patient;
use App\Repositories\Patient\PatientRepository;

class PatientRepositoryImplement implements PatientRepository
{
  public function add($data)
  {
    return Patient::create($data);
  }

  public function edit($data)
  {
    return;
  }

  public function delete($modelPatient)
  {
    return $modelPatient->delete();
  }

  public function getData()
  {
    return Patient::with('kelurahan')->select('id_patient', 'name', 'phone', 'address', 'id_kelurahan', 'birth_date', 'gender')->get();
  }
}
