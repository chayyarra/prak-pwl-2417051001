<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUser();

        $data = [
            'title' => 'List User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create User',
            'kelas' => Kelas::all(),
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required',
            'npm'      => 'required',
            'kelas_id' => 'required',
        ]);

        UserModel::create([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'), // Menggunakan 'nim' sesuai kolom di database
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        return view('edit_user', [
            'title' => 'Edit User',
            'user'  => $user,
            'kelas' => Kelas::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'     => 'required',
            'npm'      => 'required',
            'kelas_id' => 'required',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'), // Menggunakan 'nim' sesuai kolom di database
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus!');
    }
}