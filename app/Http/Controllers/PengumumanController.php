<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Menu.Pengumuman.index', [
            'title' => 'Pengumuman',
            'active' => 'pengumuman',
            'pengumumans' => Pengumuman::all(),
            'matkuls' => MataKuliah::all()  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Menu.Pengumuman.create', [
            'matkuls' => MataKuliah::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'judul' => 'required',            
            'deskripsi' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        Pengumuman::create($validatedData);

        return redirect()->back()->with('success', 'Pengumuman baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'judul' => 'required',            
            'deskripsi' => 'required',
        ]);

        if($pengumuman->user_id !== auth()->user()->id) abort(403);

        $validatedData['user_id'] = 1;//auth()->user()->id;

        Pengumuman::find($pengumuman->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Pengumuman baru telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus');
    }
}
