<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nameTeam extends Model
{
    use HasFactory;
    protected $table = 'nama_team';
    protected $fillable  = [
        'namefull',
        'email',
        'phone',
        'line'
    ];
}
