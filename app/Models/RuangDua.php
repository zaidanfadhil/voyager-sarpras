<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangDua extends Model
{
    use HasFactory;
    protected $table ="ruang_duas";
    
    protected $primaryKey = 'id';
   
    protected $fillable = ['nama_barang','spesifikasi','jumlah','kondisi'];
}
