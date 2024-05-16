<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'code',
        'jmbg',
        'register_date',
        'image_path',
        'street',
        'post_no',
        'city',
        'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
