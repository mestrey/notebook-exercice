<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = [
        'fio',
        'company',
        'phone',
        'email',
        'birth',
        'photo',
    ];
}
