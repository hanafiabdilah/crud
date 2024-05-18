<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barang = Barang::all();
    
        return view('barang', [
            'barang' => $barang,
        ]);
    }

    public function create() {
        return view('tambah-barang');
    }

    public function store(Request $request) {
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
        ]);
    
        return redirect()->route('barang');
    }

    public function edit($id) {
        $barang = Barang::find($id);
    
        return view('edit-barang', [
            'barang' => $barang,
        ]);
    }

    public function update(Request $request, $id){
        $barang = Barang::find($id);
    
        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
        ]);
    
        return redirect()->route('barang');
    }

    public function delete($id){
        $barang = Barang::find($id);
    
        $barang->delete();
    
        return redirect()->route('barang');
    }
}
