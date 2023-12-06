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
        return view('hasil', [
            'hasill' => ModelBarang::all()
        ]);
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
        $data = new ModelBarang();

        $kode = $request->input('kode');
        $nama = $request->input('nama');
        $jenis = $request->input('jenis');
        $qty = $request->input('qty');
        $harga = $request->input('harga');
        $hargatotal = $qty * $harga;

        if ($hargatotal >= 100000 && $hargatotal < 200000) {
            $diskon = $hargatotal * 0.1;
        } else if ($hargatotal >= 200000 && $hargatotal < 500000) {
            $diskon = $hargatotal * 0.2;
        } else if ($hargatotal >= 500000) {
            $diskon = $hargatotal * 0.5;
        }

        $total = $hargatotal - $diskon;

        ModelBarang::create([
            'kode' => $kode,
            'nama' => $nama,
            'jenis' => $jenis,
            'harga' => $harga,
            'qty' => $qty,
            'hargatotal' => $hargatotal,
            'diskon' => $diskon,
            'total' => $total,
        ]);

        echo "<script>alert('data berhasil masuk!')</script>";

        return view('hasil',[
            'hasill' => ModelBarang::all()
        ]);
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
        $data = ModelBarang::find($id);
        
        return view('Update', [
            'data' => $data
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelBarang::find($id);

        $kode = $request->input('kode');
        $nama = $request->input('nama');
        $jenis = $request->input('jenis');
        $qty = $request->input('qty');
        $harga = $request->input('harga');
        $hargatotal = $qty * $harga;

        if ($hargatotal >= 100000 && $hargatotal < 200000) {
            $diskon = $hargatotal * 0.1;
        } else if ($hargatotal >= 200000 && $hargatotal < 500000) {
            $diskon = $hargatotal * 0.2;
        } else if ($hargatotal >= 500000) {
            $diskon = $hargatotal * 0.5;
        }

        $total = $hargatotal - $diskon;

        $data->update([
            'kode' => $kode,
            'nama' => $nama,
            'jenis' => $jenis,
            'harga' => $harga,
            'qty' => $qty,
            'hargatotal' => $hargatotal,
            'diskon' => $diskon,
            'total' => $total,
        ]);

        echo "<script>alert('data berhasil masuk!')</script>";

        return view('hasil',[
            'hasill' => ModelBarang::all()
        ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelBarang::find($id)->delete();

        return view('hasil',[
            'hasill' => ModelBarang::all()
        ]);
        //
    }
}
