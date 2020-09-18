<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Lesson;
use App\Models\Course;
use SoftDeletes;
use Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    const ROLE = [
        'user' => 0,
        'teacher' => 1,
    ];

    protected $fillable = [
        'name', 'avatar', 'role', 'password', 'link_facebook', 'email', 'link_slack', 'introduction',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function getReviewLessonAttribute()
    {
        $users = $this->reviews;
        return $users;
    }

    public function getLessonReviewNameAttribute()
    {
        $users = $this->reviews;
        $lesson = $users->lessons;
        return $lessons;
    }
    public function __construct() {
        parent::__construct(); // Don't forget this, you'll never know what's being done in the constructor of the parent class you extended
    }


    
}
