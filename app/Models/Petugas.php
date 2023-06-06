<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'NoPetugas';

    protected $fillable = [
        'IDUser',
        'NoTelp',
        'Area',
    ];
}