<?php

namespace App\Http\Controllers;

use App\Models\Prosesbisnis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProsesbisnisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prosesbisnis::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $request->validate([
            'kode_proses_bisnis' => 'required',
            'kode_layanan_bisnis' => 'required', // Sesuaikan dengan nama kolom yang benar
            'nama_proses_bisnis' => 'required',
            'deskripsi' => 'required',
            'tahapan_proses_bisnis' => 'required',
            'kategori_proses_bisnis' => 'required',
        ]);

        // Membuat instance baru dari model Prosesbisnis
        $prosesbisnis = new Prosesbisnis;
        $prosesbisnis->kode_proses_bisnis = $request->input('kode_proses_bisnis');
        $prosesbisnis->kode_layanan_bisnis = $request->input('kode_layanan_bisnis'); // Sesuaikan dengan nama kolom yang benar
        $prosesbisnis->nama_proses_bisnis = $request->input('nama_proses_bisnis');
        $prosesbisnis->deskripsi = $request->input('deskripsi');
        $prosesbisnis->tahapan_proses_bisnis = $request->input('tahapan_proses_bisnis');
        $prosesbisnis->kategori_proses_bisnis = $request->input('kategori_proses_bisnis');
        
        // Menyimpan data ke database
        $prosesbisnis->save();

        // Redirect ke halaman /data setelah berhasil menyimpan
        return redirect('/data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Prosesbisnis::find($id);
        return view('show', compact('data'));

        // Pemeriksaan Data
        if ($data) {
            // Jika data ditemukan, akan menampilkan detail databank dari setiap data yang dilihat
            return view('/show', ['data' => $data]);
        } else {
            // Jika data tidak ditemukan, menampilkan pesan error
            Session::flash('error', 'Data tidak ditemukan.');
            return redirect('/data');
            }
        }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mengambil data bank berdasarkan ID
        $data = Prosesbisnis::find($id);
        return view('edit', compact('data')); // Mengirim data ke tampilan edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input data yang diterima dari request
        $validator = Validator::make($request->all(), [
            'kode_proses_bisnis'     => 'required',
            'kode_layanan_bisnis'   => 'required', // Sesuaikan dengan nama kolom yang benar
            'nama_proses_bisnis'    => 'required|max:100',
            'deskripsi'             => 'required',
            'tahapan_proses_bisnis' => 'required',
            'kategori_proses_bisnis'=> 'required',
        ]);

        // Jika validasi gagal, alihkan kembali ke formulir edit dengan kesalahan dan input
        if ($validator->fails()) {
            Session::flash('error', 'Inputan harus terisi semua.');
            return redirect('/data/' . $id . '/edit')->withInput();
        } else { // Jika validasi berhasil, lanjutkan dengan memperbarui data
            $updateData = Prosesbisnis::find($id);
            $updateData->kode_proses_bisnis = $request->input('kode_proses_bisnis');
            $updateData->kode_layanan_bisnis = $request->input('kode_layanan_bisnis'); // Sesuaikan dengan nama kolom yang benar
            $updateData->nama_proses_bisnis = $request->input('nama_proses_bisnis');
            $updateData->deskripsi = $request->input('deskripsi');
            $updateData->tahapan_proses_bisnis = $request->input('tahapan_proses_bisnis');
            $updateData->kategori_proses_bisnis = $request->input('kategori_proses_bisnis');

            // Upaya menyimpan data yang diperbarui
            if ($updateData->save()) {
                Session::flash('success', 'Proses update data berhasil.');
                return redirect('/data');
            } else {
                Session::flash('error', 'Proses update data gagal.');
                return redirect('/data/' . $id . '/edit');
            }
        }
    }


    /**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    // Mengambil data prosesbisnisberdasarkan ID
    $idBank = Prosesbisnis::find($id);

    if ($idBank->delete()) {
        Session::flash('success', 'Data bank berhasil dihapus.');
        return redirect('/data');
    } else {
        Session::flash('error', 'Data bank gagal dihapus.');
        return redirect('/data');
    }
}
}