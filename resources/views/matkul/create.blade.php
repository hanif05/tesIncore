@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Matkul</div>

                <div class="card-body">
                    <form action="{{ route('matkul.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="kode_matkul" placeholder="Kode Matkul">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_matkul" placeholder="Nama Matkul">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sks" placeholder="Jumlah SKS">
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
