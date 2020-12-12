<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangLabBroadcasting extends Model
{
    use HasFactory;
    protected $table ="ruang_lab_broadcastings";
    
    protected $primaryKey = 'id';
   
    protected $fillable = ['nama_barang','spesifikasi','jumlah','kondisi'];
}
