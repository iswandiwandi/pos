@extends('layouts.app')
@section('title', 'Data Kategori')
@section('content')
<div class="table responsive">
    <div align="right" class="mb-3">
        <a href="{{ route('namadokter.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($data as $key => $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->namadokter->name }}</td>

                <td>
                    <a href="{{ route('namadokter.edit', $d->id) }}" class="btn btn-xs btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('namadokter.destroy', $d->id) }}" method="post" class="d-inline">
                        @csrf
                        <input type="hidden" name=" _method" value="DELETE">
                        <button class="btn btn-xs btn-danger show_confirm" type="submit">
                            <i class="fas fa-trash"></i>
                        </button>
                        </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection