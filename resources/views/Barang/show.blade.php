@extends('layouts.app')

@section('content')
    <div class="container w-50 mt-3 px-4 py-4 bg-light">
        <h2 class="pb-2 text-center">Detail Barang</h2>
        <div>
            <form class="row g-3 pt-3">
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" class="form-control" id="kode_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>

                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}"  class="form-control" id="nama_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga</label>
                    <input type="number" name="harga_barang" value="{{ number_format($barang->harga_barang, 0, ',', '.') }}"  class="form-control" id="harga_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label">Satuan</label>
                    <input type="text" name="satuan_barang" value="{{ $barang->satuan->kode_satuan . ' - ' . $barang->satuan->nama_satuan }}"  class="form-control" id="satuan_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" readonly>{{ $barang->deskripsi_barang }}</textarea>
                </div>
                <div class="col-12">
                    <a class="btn btm-sm btn-primary px-4 mt-3" href="{{route('barangs.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div>


@endsection
