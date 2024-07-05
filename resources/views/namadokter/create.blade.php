@extends('layouts.app')
@section('title', 'Tambah Nama Dokter')
@section('content')
<form action="{{ route('namadokter.store') }}" method="post">
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
        <label for="">Nama Dokter</label>
        <input type="text" class="form-control" name="nama_dokter" placeholder="Masukkan Nama Dokter">
    </div>


</form>
@endsection