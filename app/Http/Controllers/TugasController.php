<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\User;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Menu.Tugas.index', [
            'title' => 'Tugas',
            'active' => 'tugas',
            'tugass' => Tugas::all(),
            'users' => User::all(),
            'matkuls' => MataKuliah::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Menu.Tugas.create', [
            'matkuls' => MataKuliah::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
            'jenisPengerjaan' => 'required'
        ]);
        // dd($validatedData);
        $validatedData['user_id'] = auth()->user()->id;

        Tugas::create($validatedData);

        return redirect()->back()->with('success', 'Tugas baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
            'jenisPengerjaan' => 'required',
        ]);

        // if($tugas->user_id !== auth()->user()->id) abort(403);

        $validatedData['user_id'] = auth()->user()->id;
        // dd($validatedData);

        Tugas::find($id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Tugas baru telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Tugas::destroy($id);
        return redirect()->back()->with('success', 'Tugas berhasil dihapus');
    }
}
