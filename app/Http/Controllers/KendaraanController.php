<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
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
            return view('kendaraan.tampilKendaraan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //untuk menampilkan form
         return view('Kendaraan.tambahKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new kendaraan();
        $data->no_pol = $request->no_pol;
        $data->tahun_kendaraan = $request->tahun_kendaraan;
        $data->no_mesin = $request->no_mesin;
        $data->no_rangka = $request->no_rangka;
        $data->kapasitas_mesin = $request->kapasitas_mesin;
        $data->transmisi = $request->transmisi;
        $data->save();
        return redirect('Kendaraan');
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
        return view('Kendaraan.updateKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //
         $data = kendaraan::where('id_kendaraan', '=', $id);
         $data->update([
             'no_pol' => $request->no_pol,
             'tahun_kendaraan' => $request->tahun_kendaraan,
             'no_mesin' => $request->no_mesin,
             'no_rangka' => $request->no_rangka,
             'kapasitas_mesin' => $request->kapasitas_mesin,
             'transmisi' => $request->transmisi,
           ]);
           return redirect('Kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=kendaraan::where('id_kendaraan', '=', $id);
        $data->delete();
        return redirect('Kendaraan');
    }
}
