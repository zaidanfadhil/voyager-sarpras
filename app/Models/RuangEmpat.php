<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangEmpat extends Model
{
    use HasFactory;
    protected $table ="ruang_empats";
    
    protected $primaryKey = 'id';
   
    protected $fillable = ['nama_barang','spesifikasi','jumlah','kondisi'];
}
