<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('adminpage.informasipage.index', [
            'dataInformasi' => Informasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpage.informasipage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:100',
            'isi' => 'required',
            'tanggal' => 'required',
            'file' => 'required|max:5000'
        ]);

        $validated['file'] = $request->file('file')->store('berkas');

        Informasi::create($validated);

        return redirect('informasi')->with('success', 'Informasi Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informasi $informasi)
    {
        return view('adminpage.informasipage.edit', [
            'data' => $informasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informasi $informasi)
    {
        $validated = $request->validate([
            'judul' => 'required|max:100',
            'isi' => 'required',
            'tanggal' => 'required',
            'file' => 'max:5000'
        ]);

        if ($request->file('file')) {
            $validated['file'] = $request->file('file')->store('berkas');

            Storage::delete($informasi->file);
        }

        Informasi::where('id', $informasi->id)->update($validated);

        return redirect('informasi')->with('success', 'Informasi Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informasi $informasi)
    {

        Informasi::destroy($informasi->id);
        Storage::delete($informasi->file);
        return back()->with('success', 'Informasi berhasil dihapus!');
    }

    public function lihat(Informasi $informasi)
    {

        return view('userpage.showInformasi', [
            'data' => $informasi
        ]);
    }
}
