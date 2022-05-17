@extends('template.master')
@section('judul', 'Edit Data Dosen')

@section('isi')
    <h1>Edit Data Dosen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update.dosen', $dosen->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ $dosen->nik }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen"
                   value="{{ $dosen->nama_dosen }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{ $dosen->umur }}">
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        <a href="{{ url('data-dosen') }}" class="btn btn-warning">Batal</a>
    </form>
@endsection
