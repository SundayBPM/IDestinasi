<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini


class EditProfilController extends Controller
{
    public function index(){
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('edit-profil.index', compact('user'));
            }
        }
    }
    
    
    public function edit($id)
    {
        $editProfil = User::findOrFail($id);
        return view('edit-profil.edit', compact('editProfil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8',
            'no_telp' => 'required|numeric',
            'domisili' => 'required',
            'gender' => 'required',
            'usia' => 'required|integer',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->no_telp = $request->input('no_telp');
        $user->domisili = $request->input('domisili');
        $user->gender = $request->input('gender');
        $user->usia = $request->input('usia');

        $user->save();

        return redirect()->route('edit-profil.index', $id)->with('success', 'Profil berhasil diupdate');
    }
}
