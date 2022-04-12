@extends('template.master')
@section('judul', 'Tambah Data Dosen')

@section('isi')
    <h1>Tambah Data Dosen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('save-dosen') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
        </div>
        <div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen"
                   value="{{ old('nama_dosen') }}">
            @error('nama_dosen')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{ old('umur') }}">
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
    </form>
@endsection
