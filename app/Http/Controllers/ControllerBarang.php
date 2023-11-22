<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBarang;

class ControllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Barang');
        //
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
        $data = $request->all();

        $diskon = 0;
        $harga_jual_setelah_diskon = 0;

        if ($data['harga'] >= 100000 && $data['harga'] < 200000) {
            $diskon = 10;
        } else if ($data['harga'] >= 200000 && $data['harga'] < 500000) {
            $diskon = 20;
        } else if ($data['harga'] >= 500000) {
            $diskon = 50;
        }

        $harga_jual_setelah_diskon = $data['harga'] * ((100 - $diskon) / 100);

        $form = new ModelBarang();
        $form->kode = $data['kode'];
        $form->nama = $data['nama'];
        $form->jenis = $data['jenis'];
        $form->qty = $data['qty'];
        $form->harga = $harga_jual_setelah_diskon;

        $form->save();

        return view('hasil', compact('data', 'diskon', 'harga_jual_setelah_diskon'));
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
