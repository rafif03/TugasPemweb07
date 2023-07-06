<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'NoPelanggan';

    public $timestamps = false;
    protected $fillable = [
        'IDUser',
        'IDJenis',
        'NoTelp',
        'Email',
        'Alamat',
        'NoPetugas',
    ];
}