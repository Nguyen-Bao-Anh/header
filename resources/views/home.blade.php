@extends('layouts.app')

@section('content')

<section class="example background-banner">
    
</section>

<div class="container-fluid">
    <div class="row row-color">
        <div class="col-md-5 title">
            <div class="banner-title">
                Learn Anytime, Anywhere
                <span class="title-extra">
                    at HapoLearn
                    <img src="/images/Hapo.PNG" alt="haposhoft" class="title-img">
                    !
                </span>
            </div>

            <div class="title-content">
                Interactive lessons, "on the go" 
                <div class="title-content-paragraph">
                practice, peer support
                </div>
            </div>

            <div class="start">
                <button class="btn-start">
                    Start Learning Now!
                </button>
            </div>
        </div>
    </div>
</div>

<section class="course">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 card-distance">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >HTML/CSS/js Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-distance">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >LARAVEL Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-distance card-end">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >PHP Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other courses -->
        <div class="row justify-content-center">
            <div class="col-lg-6 other-courses-title">
                <p class="other-courses-text">Other courses</p>
            </div>
        </div>

        <div class="row other-card-position ">
        <div class="col-lg-4 card-distance">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >CSS Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-distance">
                <div class="card border-course  card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >Ruby on rails Tutorial</h5>
                        <p class="card-text title-course-content"> I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-distance card-end">
                <div class="card border-course  card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded"></div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >Ruby on rails Tutorial</h5>
                        <p class="card-text title-course-content"> I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row  justify-content-center">
            <div class="col-lg-5 course-shows">
                View All Our Courses 
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>

<section class="background-why">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-7">
                <h4 class="why-tablet">Why HapoLearn?</h4>
            </div>
        </div>
        <div class="row">
            <div class="row align-items-center mr-0">
                <div class="col-lg-5 col-md-7 offset-lg-1 offset-md-0 why-content">
                    <div class="row row-title">
                        <div class="col-4">
                            <img src="{{ asset('images/why-laptop.png') }}" alt="why" class="device-mobile">
                        </div>
                        <div class="col-lg-12 col-md-12 col-2 align-self-center">
                            <h4 class="why-title why-pc">Why HapoLearn?</h4>
                        </div>
                    </div>

                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{ asset('images/background-device.png') }}" alt="why" class="why-img">
                </div>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="feedback-heading">
        <div class="title">Feedback</div>
        <div class="description">What other students turned professionals have to say about us after learning with us and reaching their goals</div>
    </div>
    <div class="container">
        <div class="slider">
            <div class="slider-item">
                <div class="slider-slogan">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="/images/avatar.png" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-slogan">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="/images/avatar.png" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-slogan">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="/images/avatar.png" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Hoang Anh Nguyen</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-slogan">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                </div>
                <div class="slider-user">
                    <img src="/images/avatar.png" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">Nguyen Bao Anh</div>
                        <div class="user-language">PHP</div>
                        <div class="user-stars">
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-solid fa-star user-star-icon"></i>
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="member background-member">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-8 col-10 member-location">
                <p class="member-title">Become a member of our growing community!</p>
                <button class="member-btn">Start Learning Now!</button>
            </div>
        </div>
    </div>
</section>

<section class="statistic">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-4 statistic-title">
                Statistic
            </div>
        </div>

        <div class="row justify-content-around statistic-location">
            <div class="col-lg-2 col-md-2 statistic-element">
                <p>Courses</p>
                <p class="statistic-element-number">1,586</p>
            </div>
            <div class="col-lg-2 col-md-2 statistic-element">
                <p>Lessons</p>
                <p class="statistic-element-number">2,689</p>
            </div>
            <div class="col-lg-2 col-md-2 statistic-element">
                <p>Learners</p>
                <p class="statistic-element-number">16,882</p>
            </div>
        </div>
    </div>
</section>

@endsection
