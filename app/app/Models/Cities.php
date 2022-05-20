<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = 'cities';

    public function state(){
        return $this->belongsTo(States::class);
    }

    public function volunteer(){
        return $this->hasOne(Volunteers::class);
    }
}
