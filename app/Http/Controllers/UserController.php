<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tugas;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Menu.Anggota.index', [
            'title' => 'Anggota',
            'active' => 'anggota',
            'users' => User::all(),
            'usersAdded' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|max:8|unique:users,nim',
            'name' => 'required|max:255',
            'email'  => 'required|email:dns|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['isAdmin'] = false;

        User::create($validatedData);

        return redirect()->back()->with('success', 'Anggota baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [           
            'name' => 'required|max:255',            
            // 'email'  => 'required|email:dns|unique:users,email',
            'email'  => 'required|email:dns',
            'image' => 'image|file|max:1024',
        ];

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images', 'public');
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = $user->password;
        $validatedData['isAdmin'] = $request->input('isAdmin') == "on" ? 1 : 0;

        $user->update($validatedData);

        return redirect()->back()->with('success', 'Data berhasil di update');
    }

    public function addToMatkul(Request $request, $matkulId, $userId)
    {
        $matkul = MataKuliah::findOrFail($matkulId);
        $matkul->anggota()->attach($userId);

        return redirect()->back()->with('success', 'Mahasiswa telah ditambahakan!');
    }

    public function romoveFromMatkul(Request $request, $matkulId, $userId)
    {
        $matkul = MataKuliah::findOrFail($matkulId);
        $matkul->anggota()->detach($userId);

        return redirect()->back()->with('success', 'Mahasiswa telah dihapus!');
    }

    public function addToTugas(Request $request, $tugasId, $userId)
    {
        $tugas = Tugas::findOrFail($tugasId);
        $tugas->anggota()->attach($userId);

        return redirect()->back()->with('success', 'Mahasiswa telah ditambahakan!');
    }

    public function romoveFromTugas(Request $request, $tugasId, $userId)
    {
        $tugas = Tugas::findOrFail($tugasId);
        $tugas->anggota()->detach($userId);

        return redirect()->back()->with('success', 'Mahasiswa telah dihapus!');
    }

    public function updatePassword(Request $request, $userId)
    {
        // dd($request);
        $user = User::find($userId);

        $userData = [
            'nim' => $user->nim,
            'name' => $user->name,
            'email' => $user->email,
            'isAdmin' => $user->isAdmin,
        ];

        if(!Hash::check($request->passwordLama, $user->password)){
            return redirect()->back()->with('failed', 'Password salah');
        }

        $userData['password'] = bcrypt($request->passwordBaru);

        User::where('id', $user->id)
            ->update($userData);

        return redirect()->back()->with('success', 'Data Anggota berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Anggota berhasil dihapus');
    }
}
