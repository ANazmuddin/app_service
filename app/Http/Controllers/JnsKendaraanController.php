<?php

namespace App\Http\Controllers;

use App\Models\jnsKendaraan;
use Illuminate\Http\Request;

class JnsKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jnsKendaraan::get();
        // dd($data);
        return view('jnsKendaraan.tampilJnsKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('jnsKendaraan.tambahJnsKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert ke sql
        $data = new jnsKendaraan();
        $data->nm_jns_kendaraan = $request->jns_kendaraan;
        $post = $data->save();
        return redirect('jnskendaraan');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
