<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
