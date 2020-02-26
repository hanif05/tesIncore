@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    <a href="{{ route('mahasiswa.create') }}">Tambah</a>
                    <table class="table table-responsive">
                        <thead>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Kode Matkul</th>
                            <th>Nama Matkul</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $item)
                            <tr>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    @foreach ($item->matkul as $matkul)
                                        {{ $matkul->kode_matkul }} |
                                    @endforeach

                                </td>
                                <td>
                                    @foreach ($item->matkul as $matkul)
                                        {{ $matkul->nama_matkul }} |
                                    @endforeach

                                </td>
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-outline-success btn-sm">Edit</a> |
                                    <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
