<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Menu.Materi.index', [
            'title' => 'Materi',
            'active' => 'materi',
            'materis' => Materi::all(),
            'matkuls' => MataKuliah::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Menu.Materi.create', [
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
        //dd($validatedData);
        Materi::create($validatedData);

        return redirect()->back()->with('success', 'Materi baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'judul' => 'required',            
            'deskripsi' => 'required',
        ]);

        if($materi->user_id !== auth()->user()->id) abort(403);

        $validatedData['user_id'] = 1;//auth()->user()->id;

        Materi::find($materi->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Materi baru telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        Materi::destroy($materi->id);
        return redirect()->back()->with('success', 'Materi berhasil dihapus');
    }
}
