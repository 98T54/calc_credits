<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    public function programs(){
        return $this->belongsToMany(Program::class);
    }
    
    public function lectures(){
        return $this->hasMany(Lecture::class);
    }
}
