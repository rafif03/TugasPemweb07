<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'IDUser';

    protected $fillable = [
        'IDRole',
        'NamaUser',
        'Username',
        'PassUser',
    ];
}