@extends('template.master')

@section('judul', 'Data Dosen')

@section('isi')
    <h1>Data Dosen</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->nama_dosen }}</td>
                <td>{{ $row->umur }}</td>
                <td>
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


@endsection
