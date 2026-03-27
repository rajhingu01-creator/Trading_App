@extends('web.header-footer')
@section('content')
    <main class="main-wrapper courses-page">
        <section class="banner-content"
            style="background: url(https://script.viserlab.com/tutolab/assets/images/frontend/course_list/64e4a61f279a01692706335.png) no-repeat center center;
        background-size: cover;">
            <div class="custom--container"
            bis_skin_checked="1">
            <div class="course-banner-row">
                <div class="course-banner-first" bis_skin_checked="1">
                    <div class="banner__content " bis_skin_checked="1">
                        <h4 class="banner__title text-white">
                            <span class="icon"><img
                                    src="https://script.viserlab.com/tutolab/assets/images/frontend/course_list/64e4a4b5ce2031692705973.png"
                                    alt="icon"></span>
                            Web And App Development
                        </h4>
                        <p class="banner__subtitle text-white fs-18">Learn all the insider tricks and strategies to take
                            your Amazon game to the next level.</p>
                    </div>
                </div>
                <div class="course-banner-second " bis_skin_checked="1">
                    <div class="live-video" bis_skin_checked="1">
                        <div class="live-video__frame frame-1" bis_skin_checked="1">
                            <video autoplay="" loop="" muted="">
                                <source
                                    src="https://script.viserlab.com/tutolab/assets/course_page_video/64ef49349e7f31693403444.mp4"
                                    type="video/mp4">
                                Your browser does not support this video please update your browse.
                            </video>
                        </div>
                        <div class="live-video__frame frame-2" bis_skin_checked="1">
                            <video autoplay="" loop="" muted="">
                                <source
                                    src="https://script.viserlab.com/tutolab/assets/course_page_video/64ef4934a08261693403444.mp4"
                                    type="video/mp4">
                                Your browser does not support this video please update your browse.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="course-div">
            <div class="custom--container" bis_skin_checked="1">
                <h5 class="courses-type-title">Premium Courses </h5>
                <div class="course-div-row" bis_skin_checked="1">
                    <div class="course-card" bis_skin_checked="1">
                        <a class="card course-card h-100"
                            href="https://script.viserlab.com/tutolab/course/details/building-resilience-overcoming-challenges-with-grit/48">
                            <div class="card-header" bis_skin_checked="1">
                                <img class="course-card-thumb"
                                    src="https://script.viserlab.com/tutolab/assets/images/course/64ef2c3032b0a1693396016.jpg"
                                    alt="Building Resilience: Overcoming Challenges with Grit">
                                <span class="course-card-badge">Premium</span>
                            </div>
                            <div class="card-body" bis_skin_checked="1">
                                <h6 class="course-card-title">Building Resilience: Overcoming Challenges with Grit</h6>
                                <div class="flex-between gap-2" bis_skin_checked="1">
                                    <span class="course-card-duration">Duration: 07:47:58</span>
                                    <div class="review-card-ratings" bis_skin_checked="1">
                                        <span class="review-card-star review-card-star-full"></span><span
                                            class="review-card-star review-card-star-full"></span><span
                                            class="review-card-star review-card-star-full"></span><span
                                            class="review-card-star review-card-star-full"></span><span
                                            class="review-card-star review-card-star-full"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer" bis_skin_checked="1">
                                <span class="course-card-price fs-16">
                                    <del class="text-muted fs-15">$100.00</del>
                                    $90.00
                                </span>
                                <button class="btn btn--rounded btn--light course-card-btn-enroll" type="button">
                                    <i class="fas fa-play-circle"></i>
                                    Enroll now </button>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
