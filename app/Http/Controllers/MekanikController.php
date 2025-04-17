<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\mekanik;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kendaraan::get();
            //dd($data);
            return view('Mekanik.tampilMekanik',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //untuk menampilkan form
         return view('Mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new mekanik();
        $data->nm_mekanik = $request->mekanik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_telp = $request->no_telp;
        $data->save();
        return redirect('mekanik');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kendaraan::where('id_kendaraan', '=', $id)->get();
        return view('Mekanik.updateMekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //
         $data = kendaraan::where('id_mekanik', '=', $id);
         $data->update([
            'nm_mekanik' => $request->mekanik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
           ]);
           return redirect('Mekanik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=kendaraan::where('id_mekanik', '=', $id);
        $data->delete();
        return redirect('Mekanik');
    }
}
