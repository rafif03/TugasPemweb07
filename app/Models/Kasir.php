<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';
    protected $primaryKey = 'NoKasir';

    public $timestamps = false;
    protected $fillable = [
        'NoTelp',
        'Email',
        'NoRekening',
    ];
}