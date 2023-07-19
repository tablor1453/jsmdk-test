<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Services\Kelurahan\KelurahanService;
use App\Services\Patient\PatientService;
use Exception;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $_patientService, $_kelurahanService;

    public function __construct(PatientService $patientService, KelurahanService $keluharanService)
    {
        $this->_patientService = $patientService;
        $this->_kelurahanService = $keluharanService;
    }

    public function create()
    {
        $datas = $this->_patientService->getData();
        $kelurahan = $this->_kelurahanService->getData();
        return view('patient', compact('datas', 'kelurahan'));
    }

    public function store(Request $request)
    {
        try {
            if (!$this->_patientService->add($request)) throw new Exception("Terjadi kesalahan sistem, silahkan coba kembali", 500);

            $message = [
                'alertTitle' => 'Berhasil.',
                'alertMessage' => 'Data kelurahan telah disimpan.'
            ];

            return redirect()->to(route('patient.add'))->with('success', $message);
        } catch (\Throwable $th) {
            $message = [
                'alertTitle' => 'Sistem Error!',
                'alertMessage' => $th->getMessage()
            ];

            return redirect()->to(route('patient.add'))->with('failed', $message);
        }
    }

    public function edit()
    {
        echo 'form edit';
    }

    public function update()
    {
        echo 'update';
    }

    public function delete(Patient $modelPatient)
    {
        try {
            if (!$this->_patientService->delete($modelPatient)) throw new Exception("Terjadi kesalahan sistem, silahkan coba kembali", 500);

            $message = [
                'alertTitle' => 'Berhasil',
                'alertMessage' => 'Data pasien telah dihapus.'
            ];

            return redirect()->to(route('patient.add'))->with('success', $message);
        } catch (\Throwable $th) {
            $message = [
                'alertTitle' => 'Sistem Error',
                'alertMessage' => $th->getMessage()
            ];

            return redirect()->to(route('patient.add'))->with('failed', $message);
        }
    }
}
