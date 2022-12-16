<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'surname',
        'code',
        'jmbg',
        'register_date',
        'image_path',
        'street',
        'post_no',
        'city',
        'image',

    ];
}
