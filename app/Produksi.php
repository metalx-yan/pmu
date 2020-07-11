<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $fillable = ['produksi','komoditas_id'];

    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class);
    }
}
