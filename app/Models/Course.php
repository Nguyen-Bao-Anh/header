<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'describe',
        'image',
        'price',
        'time'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher_course', 'course_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function scopeMain($query)
    {
        return $query->orderBy('price', config('amount.sort_low_to_hight'))->limit(config('amount.course_num_home'));
    }
}
