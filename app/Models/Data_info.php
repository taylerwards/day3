<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_info extends Model
{
    use HasFactory;
       protected $fillable = [
        'fname',
        'mname',
        'lname',
    ];
}