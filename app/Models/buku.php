<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    public function pinjaman_detail()
    {
        return $this->hasMany('App\Models\PeminjamanDetail', 'buku_id', 'id');
    }
}
