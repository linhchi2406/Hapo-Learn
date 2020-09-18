<div class="main-teacher">
    <div class="title pb-3"> Main Teachers</div>
        @foreach($courseDetail->teacher_course as $key => $teacher)
            <div class="teacher-infor d-flex flex-row pb-3 mt-5">
                <div class="ava col-3">
                    <img src="{{ asset($teacher->avatar) }}" style="width: 100px; height: 100px;">
                </div>
                <div class="infor col-6">
                    <div class="name">{{ $teacher->name }}</div>
                    <div class="name-intro">Second Year Teacher </div>
                    <div class="soical">
                       <img class="px-1 py-1 mr-2 google" src="{{ asset('storage/image/google.png') }}">
                       <a href="{{ $teacher->link_facebook }}"> <img class="px-1 py-1 mr-2 facebook" src="{{ asset('storage/image/facebook.png') }}"> </a>
                       <a href="{{ $teacher->link_slack }}"><img class="px-1 py-1 slack" src="{{ asset('storage/image/slack.png') }}"></a>
                    </div>
                </div>
            </div>
            <div class="teacher-intro">{{ $teacher->introduction }}</div>
        @endforeach
    </div>
{{ $courseDetail->teacher_course->links() }}
</div>
