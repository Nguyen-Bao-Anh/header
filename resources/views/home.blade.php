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
            @foreach($courses as $course)
            <div class="col-lg-4 card-distance card-end">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded">
                        <img src="{{ $course->image }}" alt="course">
                    </div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >{{ $course->name }}</h5>
                        <p class="card-text title-course-content">{{ $course->describe }}</p>
                        <a href="#" class="btn btn-course">
                            {{ __('message.take_this_course') }}
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Other courses -->
        <div class="row justify-content-center">
            <div class="col-lg-6 other-courses-title">
                <p class="other-courses-text">
                    {{ __('message.other_courses') }}
                </p>
            </div>
        </div>

        <div class="row other-card-position ">
            @foreach($courses as $course)
            <div class="col-lg-4 card-distance card-end">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom col-lg-12 col-md-4 rounded">
                        <img src="{{ $course->image }}" alt="course">
                    </div>
                    <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course" >{{ $course->name }}</h5>
                        <p class="card-text title-course-content">{{ $course->describe }}</p>
                        <a href="#" class="btn btn-course">
                            {{ __('message.take_this_course') }}
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row  justify-content-center">
            <div class="col-lg-5 course-shows">
                {{ __('message.view_all_our_courses') }}
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>

<section class="background-why">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-7">
                <h4 class="why-tablet">
                    {{ __('message.why_hapoLearn') }}
                </h4>
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
                            <h4 class="why-title why-pc">{{ __('message.why_hapoLearn') }}</h4>
                        </div>
                    </div>

                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('message.reason_hapoLearn') }}
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('message.reason_hapoLearn') }}
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('message.reason_hapoLearn') }}
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('message.reason_hapoLearn') }}
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('message.reason_hapoLearn') }}
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
            @foreach ( $reviews as $review )
            <div class="slider-item">
                <div class="slider-slogan">
                    {{ $review->message }}
                </div>
                <div class="slider-user">
                    <img src="{{ asset('images/avatar.png') }}" alt="avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">{{ $review->course->name }}</div>
                        <div class="user-language">{{ $review->course->name }}<</div>
                        <div class="user-stars">
                        @php
                        $rate = $review['rate'];
                        @endphp
                        @for($i = 0; $i < $rate ; $i++) <i class="fa-solid fa-star user-star-icon"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                <p class="statistic-element-number">{{ $totalCourse }}</p>
            </div>
            <div class="col-lg-2 col-md-2 statistic-element">
                <p>Lessons</p>
                <p class="statistic-element-number">{{ $totalLesson }}</p>
            </div>
            <div class="col-lg-2 col-md-2 statistic-element">
                <p>Learners</p>
                <p class="statistic-element-number">{{ $learners }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
