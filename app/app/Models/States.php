<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;
    protected $table = 'states';

    public function city(){
        return $this->hasMany(Cities::class);
    }

    public function volunteer(){
        return $this->hasOne(Volunteers::class);
    }
}
