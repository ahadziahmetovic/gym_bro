<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'start',
        'end',
        'amount',
        'comment',
        'member_id',

    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
