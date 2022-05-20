<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    use HasFactory;
    protected $fillable = [ 'name',
        'email',
        'hostel_address',
        'university_or_institute',
        'degree',
        'whatsapp_no',
        'province',
        'city',
        'interested_department',
        'profile_pic'
        ];

    public function state()
    {
        return $this->belongsTo(States::class);
    }

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
