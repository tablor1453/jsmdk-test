<?php

namespace App\Services\Patient;

use App\Models\Patient;
use App\Repositories\Patient\PatientRepository;
use App\Services\Patient\PatientService;
use Illuminate\Http\Request;

class PatientServiceImplement implements PatientService
{
  private $_patientRepository;

  public function __construct(PatientRepository $patientRepository)
  {
    $this->_patientRepository = $patientRepository;
  }

  public function add(Request $request)
  {

    $data['name'] = $request->name;
    $data['phone'] = $request->phone;
    $data['birth_date'] = $request['birth-date'];
    $data['gender'] = $request->gender;
    $data['address'] = $request->address;
    $data['rt'] = $request->rt;
    $data['rw'] = $request->rw;
    $data['id_kelurahan'] = $request->kelurahan;

    // dd($request->all(), $data);

    return $this->_patientRepository->add($data);
  }

  public function edit()
  {
    return;
  }

  public function delete(Patient $modelPatient)
  {
    return $this->_patientRepository->delete($modelPatient);
  }

  public function getData()
  {
    return $this->_patientRepository->getData();
  }
}
