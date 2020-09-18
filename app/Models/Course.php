<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\User;
use App\Models\Lesson;
use SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    protected $fillable = [
        'name', 'image', 'requements', 'description', 'price', 'time',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getNumOfLessonAttribute()
    {
        return $this->lessons()->count();
    }

    public function getPriceCourseAttribute()
    {
        $price = $this->price;

        if ($price == null) {
            $price = 'Free';
        } else {
            $price .= " $";
        }

        return $price;
    }

    public function getOtherCourseAttribute()
    {
        return $this->where('id', '!=', $this->id)
            ->paginate(config('Paginate.other-course'));
    }

    public function getTagNameAttribute()
    {
        $tags = $this->tags;
        if (count($tags) > 0) {
            $tagName = $tags->first()->name;
            for ($i = 1; $i < count($tags); $i++) {
                $tagName .= ", " . $tags[$i] ->name;
            }
        } else {
            $tagName = "#All";
        }

        return $tagName;
    }

    public function getNumOfUserAttribute()
    {
        $total = $this->users()->count();

        return $total;
    }

    public function getTimeCourseAttribute()
    {
        $time = $this->time;
        if ($time == null) {
            $time = "0 H";
        } else {
            $time .= " H";
        }

        return $time;
    }

    public function getLessonCourseAttribute()
    {
        $lesson = $this->lessons();
        return $lesson;
    }

    public function getTeacherCourseAttribute()
    {
        $teacher = $this->users()
            ->where('role', '=', '1')
            ->paginate(config('Paginate.user'));
        return $teacher;
    }

    public function getCheckUserAttribute()
    {
        $check = [];
        if (Auth::user()) {
          //  $check = $this->users()->wherePivot("user_id", Auth::user()->id)->get();
            $check = $this->users()->where('id', '=', Auth::user()->id)->get();
        }
        return count($check);
    }

}
