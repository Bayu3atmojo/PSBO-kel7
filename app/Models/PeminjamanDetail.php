<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanDetail extends Model
{
    public function buku()
    {
        return $this->belongsTo('App\Models\buku', 'buku_id', 'id');
    }

    public function peminjaman()
    {
        return $this->belongsTo('App\Models\peminjaman', 'peminjaman_id', 'id');
    }
}
