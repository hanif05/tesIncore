<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';

    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
