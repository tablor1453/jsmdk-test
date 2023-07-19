<?php

namespace App\Http\Controllers;

use App\Services\Kelurahan\KelurahanService;
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
        return view('kelurahan');
    }

    public function store()
    {
        echo 'store';
    }

    public function edit()
    {
        echo 'form edit';
    }

    public function update()
    {
        echo 'update';
    }

    public function delete()
    {
        echo 'delete';
    }
}
