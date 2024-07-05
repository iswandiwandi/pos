@extends('layouts.app')
@section('title', 'Tambah Barang')
@section('content')
    <form action="{{ route('barang.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="">Kategori </label>
            <select name="id_category" id="" class="form-control">
                <option value=""> Pilih Kategori</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group mb-3">
            <label for="">Nama Obat</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Masukkan Nama Obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Qty</label>
            <input type="text" class="form-control" name="qty" placeholder="Masukkan qty">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Obat">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="simpan">
            <input type="reset" class= "btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="text-info">Kembali</a>
        </div>

    </form>
@endsection
