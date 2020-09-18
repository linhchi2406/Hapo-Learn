<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\Models\User;
use SoftDeletes;

class Review extends Model
{
    protected $fillable = [
        'rating', 'comment', 'user_id', 'lesson_id', 'date',
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getUserNameAttribute()
    {
        return $this->users();
    }

    public function getLessonNameAtribute()
    {
        return $this->lessons();
    }

    public function getCommentContentAttribute()
    {
        return $this->comment;
    }

}
