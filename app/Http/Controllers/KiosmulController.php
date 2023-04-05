<?php

namespace App\Http\Controllers;

use App\Models\kiosmul;
use Illuminate\Http\Request;

class KiosmulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KiosmulController;
use Illuminate\Http\Request;
Route::resource('Kiosmul', KiosmulController::class);
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $kiosmuls = kiosmul::all(); // Mengambil semua isi tabel
        // $posts = kiosmul::orderBy('kode_barang', 'desc')->paginate(6);
        // return view('kiosmuls.index', compact('kiosmuls'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        $kiosmuls = kiosmul::paginate(6);
        return view('kiosmuls.index',compact('kiosmuls'));
    }
    public function create()
    {
        return view('kiosmuls.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        kiosmul::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kiosmuls.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }
    public function show()
    {
        //menampilkan detail data dengan menemukan/berdasarkan kode_barang Kiosmul
        $kiosmuls = kiosmul::find('PRD002');
        return view('kiosmuls.detail', compact('kiosmuls'));
    }
    public function edit()
    {
        //menampilkan detail data dengan menemukan berdasarkan kode_barang Kiosmul untuk
        $kiosmuls = kiosmul::find('PRD002');
        return view('kiosmuls.edit', compact('kiosmuls'));
    }
    public function update(Request $request, $kd)
    {
        //melakukan validasi data
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        kiosmul::find($kd)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kiosmuls.index')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($kd)
    {
        //fungsi eloquent untuk menghapus data
        kiosmul::find($kd)->delete();
        return redirect()->route('kiosmuls.index')>with('success', 'Data Berhasil Dihapus');
    }
};
