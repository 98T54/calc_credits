<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    public function subjects(){
        
        return $this->belongsToMany(Subject::class);
    }
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function users(){
        return $this->hasMany(User::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
