@extends('layouts.app')
@section('title', 'Ubah namadokter')
@section('content')
<form action="{{ route('namadokter.update', $edit->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="">Kategori </label>
        <select name="id_category" id="" class="form-control">
            <option value=""> Pilih Kategori</option>
            @foreach ($categories as $cat)
            <option {{$cat->id == $edit->id_category ? 'selected' : ''}} value="{{ $cat->id }}"> {{ $cat->name }}
            </option>
            @endforeach
        </select>



    </div>
    <div class="form-group mb-3">
        <label for="">Nama Dokter</label>
        <input type="text" class="form-control" name="nama_dokter" placeholder="Masukkan Nama Dokter"
            value="{{ $edit->nama_dokter }}">
    </div>


</form>
@endsection