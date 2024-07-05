@extends('layouts.app')
@section('title', 'Ubah Kategori')
@section('content')
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="">Nama</label>
        <input value="{{$edit->name}}" type="text" class="form-control" name="name"
            placeholder="Masukkan Nama Kategori">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="simpan">
        <input type="reset" class="btn btn-danger" value="Batal">
        <a href="{{ url()->previous() }}" class="text-info">Kembali</a>
    </div>


</form>
@endsection