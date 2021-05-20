<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::orderBy('id', 'ASC')->limit(config('Paginate.course'))->get();
        $courseOld = Course::orderBy('id', 'DESC')->limit(config('Paginate.course'))->get();
        $courseCount = Course::count();
        $lessonCount = Lesson::count();
        $reviews = Review::query();
        $a= Auth::check();
       

        return view('index', compact('course', 'courseOld','courseCount','lessonCount','reviews','a'));
    }

    public function profile()
    {
        $user = User::findOrFail(Auth::user()->id);
        $courses = $user->courses;
        return view('profile', compact(['user', 'courses']));
    }

    /**
     * Edit profile for user login.
     */
    public function updateProfile(RegisterUserRequest  $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $fileIsGet = $request->file('avatar')->getClientOriginalName();
            $fileName = pathinfo($fileIsGet, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . uniqid() . '.' . $extension;
            $request->file('avatar')->storeAs(config('variables.url_upload_avatar'), $fileNameToStore);
            Storage::delete(config('variables.url_upload_avatar') . '/' . $user->avatar);
            $data['avatar'] = $fileNameToStore;
        }

        $user->update($data);
        return redirect()->back();
    }
}
