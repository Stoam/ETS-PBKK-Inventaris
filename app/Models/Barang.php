<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = ['jenis', 'kondisi', 'keterangan', 'kecacatan', 'jumlah', 'gambar', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
