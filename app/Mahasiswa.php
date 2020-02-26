<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = ['nim', 'nama', 'tempat_lahir', 'tanggal_lahir'];

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class);
    }
}
