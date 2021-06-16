<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function peminjaman_detail()
    {
        return $this->hasMany('App\Models\PeminjamanDetail', 'peminjaman_id', 'id');
    }
}
