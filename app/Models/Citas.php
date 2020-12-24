<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    //public $timestamps = false;
    public $table = '_citas';

    protected $fillable = [
        'userId',
        'title',
        'createdAt',
        'returnDate'
    ];
    protected $casts = [
        'createdAt' => 'datetime',
    ];
}
