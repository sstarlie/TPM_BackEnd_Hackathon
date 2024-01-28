<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grup extends Model
{
    use HasFactory;

    protected $table = 'grup';

    protected $fillable =
    [
        'nama',
        'password',
        'confirm_password',
        'binusian'
    ];
}