@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matkul</div>

                <div class="card-body">
                    <a href="{{ route('matkul.create') }}">Tambah</a>
                    <table class="table table-responsive">
                        <thead>
                            <th>Kode Matkul</th>
                            <th>Nama Matkul</th>
                            <th>SKS</th>
                        </thead>
                        <tbody>
                            @foreach ($matkul as $item)
                            <tr>
                                <td>{{ $item->kode_matkul }}</td>
                                <td>{{ $item->nama_matkul }}</td>
                                <td>{{ $item->sks }}</td>
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
