<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemilik as ModelsPemilik;

class Pemilik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsPemilik::get();
            //dd($data);
            return view('Pemilik.tampilPemilik',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('Pemilik.tambahPemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new ModelsPemilik();
        $data->nm_pemilik = $request->nm_pemilik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('Pemilik');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsPemilik::where('id_pemilik', '=', $id)->first();
        return view('Pemilik.updatePemilik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsPemilik::where('id_pemilik', '=', $id);
        $data->update([
            'nm_pemilik' => $request->nm_pemilik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
          ]);
          return redirect('Pemilik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsPemilik::where('id_pemilik', '=', $id)->first();
    
        if ($data) {
            $data->delete();
        }
    
        return redirect('Pemilik');
    }
}