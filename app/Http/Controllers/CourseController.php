<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->course_search;
        $courses = Course::query();
        if ($keyword) {
            $courses = $courses->where('name', 'like', "%".$keyword."%")
                ->orWhere('description', 'like', "%".$keyword."%");
        }
        $courses = $courses->paginate(config('Paginate.pagination'));
        return view('layouts.course.listcourse')->with('listCourse', $courses);
    }

    public function show($id, Request $request)
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

    public function takeCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->users()->attach(Auth::user()->id);
        return redirect()->route('course.detail', $id);
    }

    public function leaveCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->users()->detach(Auth::user()->id);
        return redirect()->route('course.detail', $id);
    }
}
