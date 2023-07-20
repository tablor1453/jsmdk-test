<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        if ($this->_authLogin($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');

            dd('login berhasil');
        }

        return back()->withErrors([
            'username' => 'Username dan password tidak sesuai',
        ])->onlyInput('username');
    }

    private function _authLogin($credentials)
    {
        $data = User::where('username', $credentials['username'])->first();
        if (!$data) return false;

        if ($data->username === $credentials['username'] && Hash::check($credentials['password'], $data->password)) return true;

        return false;
    }
}
