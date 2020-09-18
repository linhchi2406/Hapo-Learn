<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class LessonUser extends Model
{
    protected $table = 'lesson_user';
    protected $fillable = [
        'lesson_id', 'user_id',
    ];
}
