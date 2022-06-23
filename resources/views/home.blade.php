@extends('layouts.app')

@section('content')

<section class="example background-banner">
    
</section>

<div class="container-fluid">
        <div class="row row-color">
            <div class="col-md-5 title">
                <div class="banner-title">
                    Learn Anytime, Anywhere
                    <span class="title_extra">
                        at HapoLearn
                        <img src="/images/Hapo.PNG" alt="haposhoft" class="title-img">
                        !
                    </span>
                </p>
            </div>

            <div class="title_content">
                Interactive lessons, "on the go" 
                <div style="margin-left: 12%;">
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

<section class="course">
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
                <div class="card border-course" >
                    <div class="img-custom"></div>
                    <div class="card-body card-content">
                        <h5 class="card-title title-course" >HTML/CSS/js Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-course" >
                    <div class="img-custom"></div>
                    <div class="card-body card-content">
                        <h5 class="card-title title-course" >HTML/CSS/js Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 border-course">
                <div class="card" >
                    <div class="img-custom"></div>
                    <div class="card-body card-content">
                        <h5 class="card-title title-course" >HTML/CSS/js Tutorial</h5>
                        <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-course">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   
@endsection
