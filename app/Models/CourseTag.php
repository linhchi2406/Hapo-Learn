<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class CourseTag extends Model
{
   
    protected $table = 'course_tag';
    protected $fillable = [
        'course_id', 'tag_id',
    ];
}
