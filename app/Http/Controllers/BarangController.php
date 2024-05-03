<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('Barang.index', [ 'barang' => $barang ]);
    }

    public function create()
    {
        $satuan = Satuan::all();
        return view('Barang.create', compact('satuan'));
    }

    public function store(Request $request)
    {
        $messages = [ 'unique' => 'Maaf Barang Sudah ada.' ];

        $validator = Validator::make($request->all(), [ 'kode_barang' => ['required', 'unique:barangs,kode_barang'], ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang_id = $request->satuan_barang;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('Barang.show', compact('barang'));
    }

    public function edit(string $id)
    {
        $satuan = Satuan::all();
        $barang = Barang::findOrFail($id);
        return view('Barang.edit', compact('satuan','barang'));
    }

    public function update(Request $request, string $id)
    {
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang_id = $request->satuan_barang;
        $barang->save();
        return redirect()->route('barangs.index');
    }


    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
