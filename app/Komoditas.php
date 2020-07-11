<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    protected $fillable = ['code','name'];

    public function produksis()
    {
        return $this->hasMany(Produksi::class);
    }
}
