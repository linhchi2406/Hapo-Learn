<section class="course container">
    <div class="card-deck backend-course row flex-sm-nowrap ml-5 ml-md-0">
        @foreach($course as $item)
        <div class="card">
            <div class="image">
                <img alt=".." class="img-fluid" src="{{ asset($item->image) }}"  style="width:370px;height:215px; border-radius: 10px 10px 0 0;">
            </div>
            <div class="card-body">
                <p class="card-title mt-1 mt-md-0">{{ $item->name }}</p>
                <p class="card-text mb-xl-4 mb-md-0">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched
                    anything in regards to web development.</p>
                <a class="ml-xl-5 ml-md-4" href="{{ route('course_detail', $item->id ) }}">Take This Course</a>
            </div>
        </div>
         @endforeach
    </div>
        
    <div class="other-course">
        <p>Other Courses</p>
    </div>
    <div class="card-deck frontend-course row flex-sm-nowrap ml-5 ml-md-0">
        @foreach($courseOld as $item)
        <div class="card">
            <div class="image css-course"><img alt=".." class="img-fluid"  src="{{ asset($item->image) }}"  style="width:370px;height:194px; border-radius: 10px 10px 0 0;"></div>
            <div class="card-body">
                <p class="card-title mt-1 mt-md-0">{{ $item->name }}</p>
                <p class="card-text mb-xl-4 mb-md-0">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched
                anything in regards to web development.</p>
                <a class="ml-xl-5 ml-md-4" href="{{ route('course_detail', $item->id) }}">Take This Course</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="all-of-course mt-4">
        <p><a href="{{ route('list_course') }}">View All Our Courses <img src="{{ asset('storage/image/mui_ten.png') }}"></a></p>
    </div>
</section>
