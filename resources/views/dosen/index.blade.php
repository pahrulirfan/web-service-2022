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
                    <form action="{{ route('delete.dosen', $row->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda Yakin ?')"
                        >Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection
