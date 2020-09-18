<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($courseId, $lessonId)
    {
        $courseDetail = Course::findOrFail($id);
        $keyword = $request->lesson_search;
        $lessons = $courseDetail->lesson_course;
        if ($keyword) {
            $lessons = $lessons->where('name', 'like', "%".$keyword."%");
        }
        $lessons = $lessons->paginate(config('Paginate.pagination-lesson'));
        return view('layouts.course.course-detail', compact('courseDetail', 'lessons'));
    }
}
