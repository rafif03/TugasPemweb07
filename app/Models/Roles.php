<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'IDRole';

    public $timestamps = false;
    protected $fillable = [
        'IDRole',
        'NamaRole',
        'Permission',
    ];
}