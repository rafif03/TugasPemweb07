<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $primaryKey = 'IDTagihan';

    protected $fillable = [
        'NoPelanggan',
        'Bulan',
        'Status',
    ];
}