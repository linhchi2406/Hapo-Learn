@extends('layouts.app')

@section('content')

<div class="course-detail1 my-5 d-flex flex-row justify-content-center">
    <div class="course-detail col-5 mr-5 ">
        <div class="course-detail-image mb-3">
            <img src="{{ asset ($courseDetail->image) }}" style="width:770px;height:430px;  border-radius: 10px;" >
        </div>
        <div class="list-about-course py-3">
            <div class = "list-title mb-3">
                <ul class="nav pb-1">
                    <li data-li="lesson" class="nav-item ml-5 active">Lessons</li>
                    <li data-li="teacher" class="nav-item ml-5">Teachers</li>
                    <li data-li="review" class="nav-item ml-5">Reviews</li>
                </ul>
            </div>
            <div class="more-information">
                <div class="lesson item">
                    <div class = "search-lesson">
                        <form method="get" action="{{ route('course_detail', $courseDetail->id) }}" class="col-12 d-flex">
                            @csrf
                            <input type="text" name="lesson_search" class="form-control col-5 mr-2"  placeholder="Search...." aria-label="Search" 
                            @if (isset($keyword)) value="{{ $keyword }}" @endif>
                            <input type="submit" class="btn btn-search" value="Tìm kiếm"/>
                            
                            @if (Auth::check() && $courseDetail->check_user)
                                    <form action="{{ route('leave_course', $courseDetail->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-join-courses px-4">Kết thúc khóa học</button>
                                    </form>
                                @elseif (Auth::check())
                                    <form action="{{ route('take_course', $courseDetail->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-join-courses px-4">Tham gia khóa học</button>
                                    </form>
                                @else
                                    <a data-target="#myModal" data-toggle="modal" class="btn btn-join-courses px-4">Tham gia khóa học</a>
                                    <input type="text" hidden name="id" value="{{ $courseDetail->id }}">
                                @endif
                        </form>   
                    </div>
                    <table class="table list-lesson mt-3">
                    @foreach($lessons as $key => $lesson)
                        <tr class="row">
                            <td class="col-1 ">{{ $key+1 }}</td>
                            @if($courseDetail->check_user)
                                    @if ($lesson->check_user_learn)
                            <td class="col-7" style="color:blue;">{{ $lesson->name }}</td>
                            @else
                            <td class="col-7" style="color:red;">{{ $lesson->name }}</td>
                            @endif
                              
                            <td class="col-3"> <a href="#" class="px-4 py-2">Learn </a> </td>
                            @endif
                        </tr>
                    @endforeach
                    </table>
                    <div class="pagination col-12 mt-5 d-flex justify-content-end">
            {{ $lessons->links('layouts.paginate') }}
        </div>
                </div>
                <div class="teacher item" style="display: none; "> @include('layouts.course.teacher')</div>
                <div class="review item" style="display: none; ">Review</div>
            </div>
        </div>
    <!-- </div> -->
    <div class="course-information col-3">
        <div class="course-description mb-5">
            <div class="description-title px-2 py-2"> Descriptions course </div>
            <div class="description-content px-2"> {{ $courseDetail ->description }} </div>
        </div>
        <div class="param col-10">
            <table class="table mt-3">
                <tr class="row">
                    <td class="col-4 "><img src="{{ asset('storage/image/learners.png') }}"> </td>
                    <td class="col-5 title">Learner: </td>
                    <td class="col-3"> {{ $courseDetail->num_of_user }}</a> </td>
                </tr>
                <tr class="row">
                    <td class="col-4 "><img src="{{ asset('storage/image/lessons.png') }}"></td>
                    <td class="col-5 title">Lessons: </td>
                    <td class="col-3">{{ $courseDetail->num_of_lesson }}</a> </td>
                </tr>
                <tr class="row">
                    <td class="col-4 "><img src="{{ asset('storage/image/times.png') }}"></td>
                    <td class="col-5 title">Times: </td>
                    <td class="col-3">{{ $courseDetail->time_course }}</td>
                </tr>
                <tr class="row">
                    <td class="col-4 "><img src="{{ asset('storage/image/tags.png') }}"></td>
                    <td class="col-5 title">Tags: </td>
                    <td class="col-3">{{ $courseDetail->tag_name }}</td>
                </tr>
                <tr class="row">
                    <td class="col-4 "><img src="{{ asset('storage/image/price.png') }}"></td>
                    <td class="col-5 title">Price: </td>
                    <td class="col-3">{{ $courseDetail->price_course }}</td>
                </tr>
            </table>
        </div>
        <div class="other-courses ml-0 mt-5">
            <div class="text-center course-title py-2">Other Course</div>
            <table class="table ml-1">
                @foreach($courseDetail->other_course as $key => $otherCourse)
                    <tr class="row content">
                        <td class="col-3 text-center">{{ $key+1 }}</td>
                        <td class="col-8 "><a href="{{ route('course_detail', $otherCourse->id) }}">{{ $otherCourse->name }}</a></td>
                    </tr> 
                @endforeach
                    <tr >
                        <td colspan="2" class="text-center pt-4 pb-3 button"><a href="#" class="px-3 py-2">View all our courses</a></td>
                    </tr>
            </table>
        </div>
    </div>
</div>

@endsection
