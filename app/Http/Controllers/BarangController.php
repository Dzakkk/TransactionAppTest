<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function barang() {
        $brg = Barang::paginate('15');
        return view('barang.data', compact('brg'));
    }

    public function tambah_barang(Request $request) {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required'
        ]);

        Barang::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);
    
        return redirect('barang')->with('success', 'Barang berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect('/barang')->with('DATA WAS UPDATED');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect('/barang')->with('error', 'barang not found.');
        }
        $barang->delete();
        return redirect('/barang')->with('success', 'barang deleted successfully.');
    }
    
}
