<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Jadwal;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hourList = [
            '1 : 07.30 - 08.20',
            '2 : 08.25 - 09.15',
            '3 : 09.20 - 10.10',
            '4 : 10.15 - 11.05',
            '5 : 11.10 - 12.00',
            '6 : 13.00 - 13.50',
            '7 : 13.55 - 14.45',
            '8 : 15.30 - 16.20',
            '9 : 16.25 - 17.15',
            '10 : 18.00 - 18.50',
            '11 : 18.55 - 19.20',

            '1 : 07.30 - 08.20',
            '2 : 08.25 - 09.15',
            '3 : 09.20 - 10.10',
            '4 : 10.15 - 11.05',
            '5 : 13.00 - 13.50',
            '6 : 13.55 - 14.45',
            '7 : 15.30 - 16.20',
            '8 : 16.25 - 17.15',
            '9 : 18.00 - 18.50',
            '10 : 18.55 - 19.20',
            '11 : 19.25 - 20.15',
        ];
    
        return view('Menu.MataKuliah.index', [
            'title' => 'Mata Kuliah',
            'active' => 'mata kuliah',
            'matkuls' => MataKuliah::all(),
            'users' => User::all(),
            'jamList' => $hourList,
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
        // dd($request);
        $validatedData = $request->validate([
            // 'namaMatKul' => 'required|unique:mata_kuliahs,namaMatKul',
            'namaMatKul' => 'required',
            // 'namaDosen' => 'required|alpha|max:255',
            'namaDosen' => 'required',
            'kelas' => 'required',
        ]);

        // dd($validatedData);
        MataKuliah::create($validatedData);

        return redirect()->back()->with('success', 'Mata Kuliah baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'namaMatKul' => 'required|unique:mata_kuliahs',
            'namaMatKul' => 'required',
            'namaDosen' => 'required',
            'kelas' => 'required',
        ]);

        MataKuliah::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Mata Kuliah baru telah di update');
    }

    public function deleteJadwal(Jadwal $jadwal, $id)
    {
        $jadwal->waktus->detach([$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MataKuliah::destroy($id);
        return redirect()->back()->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
