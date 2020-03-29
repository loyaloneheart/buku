<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Buku::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $buku = new Buku;
        $buku->kode_buku = $request->kode_buku;
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return "Data Berhasil Masuk";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kode_buku = $request->kode_buku;
        $kode_buku = $request->kode_buku;
        $judul_buku = $request->judul_buku;
        $pengarang = $request->pengarang;
        $penerbit = $request->penerbit;
        $tahun_terbit = $request->tahun_terbit;

        $buku = Buku::find($id);
        $buku->kode_buku = $request->kode_buku;
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return "Data Berhasil diupdate";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
    }

    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return "Data Berhasil diHapus";
    }
}
