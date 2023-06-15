<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'NoPetugas';

    public $timestamps = false;
    protected $fillable = [
        'NoPetugas',
        'IDUser',
        'NoTelp',
        'Area',
    ];
}