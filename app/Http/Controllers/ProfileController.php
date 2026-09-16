<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Chayyarra", $npm = "2417051001", $kelas = "B")
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }
}