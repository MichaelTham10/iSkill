<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'lecturer_id',
        'name',
        'price',
        'description',
        'rate',
        'image',
        'rate_count',
    ];
    
    public function details(){
        return $this->hasMany(CourseDetail::class, 'course_id', 'id');
    }

}
