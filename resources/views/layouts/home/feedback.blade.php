<section class="feed-back container d-flex flex-column mt-5 pt-5">
    <div class="feed-back-slogan">
        <div class="fb-slogan-up d-flex justify-content-center">
            <p>Feedback </p>
        </div>
        <div class="fb-slogan-down d-flex justify-content-center row mt-xl-4 mb-4">
            <p class="col-xl-9 text-center">What other students turned professional have to say about us after learning with us and reaching their goals all-of-course</p>
        </div>
    </div>
    <div class="fb-content d-flex flex-column d-lg-flex flex-lg-row">
        @foreach($reviews as $item)
        <div class="fb-user col-xl-6 col-8">
            <div class="fb-user-content mb-5">
                <p class="pl-3">“{{ $item->comment_content }}”</p>
            </div>
            <div class="infor-user d-flex">
                <div class="img-user mr-3"><img class="img-fluid" src="{{ asset($item->user_name->avatar) }}"></div>
                <div class="user-comment">
                    <b>{{ $item->user_name }}</b>
                    <p class="mb-0">{{ $item->lesson_name }}</p>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        @endforeach
        <div class="fb-user col-xl-6 col-8">
            <div class="fb-user-content mb-5">
                <p class="pl-3">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken
                this course. Thank you Eddie Bryan.”</p>
            </div>
            <div class="infor-user d-flex">
                <div class="img-user mr-3"><img class="img-fluid" src="{{ asset('storage/image/account.png') }}"></div>
                <div class="user-comment">
                    <b>Tuan Tran Hoang</b>
                    <p class="mb-0">Laravel</p>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <div class="fb-user col-xl-6 col-8">
            <div class="fb-user-content mb-5">
                <p class="pl-3">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken
                    this course. Thank you Eddie Bryan.”</p>
            </div>
            <div class="infor-user d-flex">
                <div class="img-user mr-3"><img class="img-fluid" src="{{ asset('storage/image/account.png') }}"></div>
                <div class="user-comment">
                    <b>Dang Linh Chi</b>
                    <p class="mb-0">HTML/CSS</p>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
            <div class="fb-user col-xl-6 col-8">
                <div class="fb-user-content mb-5">
                    <p class="pl-3">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken
                    this course. Thank you Eddie Bryan.”</p>
                </div>
                <div class="infor-user d-flex">
                <div class="img-user mr-3"><img class="img-fluid" src="{{ asset('storage/image/account.png') }}"></div>
                <div class="user-comment">
                    <b>SBC</b>
                    <p class="mb-0">Java</p>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="control-next d-flex justify-content-between position-relative">
        <a class="next-left">
            <i class="fas fa-angle-left"></i>
        </a> 
        <a class="next-right">
            <i class="fas fa-angle-right"></i>
        </a>
    </div>
</section>
