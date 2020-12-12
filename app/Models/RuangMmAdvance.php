<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangMmAdvance extends Model
{
    use HasFactory;

    protected $table ="ruang_mm_advances";
    
    protected $primaryKey = 'id';
   
    protected $fillable = ['nama_barang','spesifikasi','jumlah','kondisi'];
}
