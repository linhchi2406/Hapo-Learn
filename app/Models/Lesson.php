<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Review;
use App\Models\Course;
use SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Lesson extends Model
{
    protected $fillable = [
        'name', 'requements', 'description', 'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getCourseNameAttribute()
    {
        $course =  $this->courses();
        return $course;
    }

    public function getCheckUserLearnAttribute()
    {
        $check = [];
        if (Auth::user()) {
            $check = $this->users()->wherePivot("user_id", Auth::user()->id)->get();
        }
        return count($check);
    }

}
