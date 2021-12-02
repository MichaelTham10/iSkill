<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        
    ];
    
    public function course(){
        return $this->belongsTo(Courses::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
