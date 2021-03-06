@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nim" placeholder="nim">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="matkul_id">
                                @foreach($matkul as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_matkul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
