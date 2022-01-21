<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        "name",
        "address",
        "phone",
        "birth_date",
        "age",
        "registration_date"
    ];
    
    protected $dates = [
        "birth_date",
        "registration_date"
    ];

}
