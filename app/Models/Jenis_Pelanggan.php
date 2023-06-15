<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Pelanggan extends Model
{
    protected $table = 'jenis_pelanggan';
    protected $primaryKey = 'IDJenis';

    public $timestamps = false;
    protected $fillable = [
        'IDJenis',
        'TarifPerKubik',
        'TarifLebihBatasan',
        'Batasan',
    ];
}