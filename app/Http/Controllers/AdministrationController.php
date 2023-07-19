<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Services\Kelurahan\KelurahanService;
use Exception;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    private $_kelurahanService;

    public function __construct(KelurahanService $kelurahanService)
    {
        $this->_kelurahanService = $kelurahanService;
    }

    public function create()
    {
        $datas = $this->_kelurahanService->getData();
        return view('kelurahan', compact('datas'));
    }

    public function store(Request $request)
    {
        try {
            if (!$this->_kelurahanService->add($request)) throw new Exception("Terjadi kesalahan sistem, silahkan coba kembali", 500);

            $message = [
                'alertTitle' => 'Berhasil.',
                'alertMessage' => 'Data kelurahan telah disimpan.'
            ];

            return redirect()->to(route('kelurahan.add'))->with('success', $message);
        } catch (\Throwable $th) {
            $message = [
                'alertTitle' => 'Sistem Error!',
                'alertMessage' => $th->getMessage()
            ];

            return redirect()->to(route('kelurahan.add'))->with('failed', $message);
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

    public function delete(Administration $kelurahan)
    {
        try {
            if (!$this->_kelurahanService->delete($kelurahan)) throw new Exception("Terjadi kesalahan sistem, silahkan coba kembali", 500);

            $message = [
                'alertTitle' => 'Berhasil',
                'alertMessage' => 'Data kelurahan telah dihapus.'
            ];

            return redirect()->to(route('kelurahan.add'))->with('success', $message);
        } catch (\Throwable $th) {
            $message = [
                'alertTitle' => 'Sistem Error',
                'alertMessage' => $th->getMessage()
            ];

            return redirect()->to(route('kelurahan.add'))->with('failed', $message);
        }
    }
}
