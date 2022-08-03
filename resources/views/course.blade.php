@extends('layouts.app')
@section('content')
<section class="course">
    <div class="container list-course">
        <div class="row">
            <div class="col-1 mr-5 pl-0">
                <button class="btn-filter">
                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                    Filter
                </button>
            </div>

            <!-- <form method="GET" action="{{ route('course') }}"> -->
            <!-- @csrf -->
            <div class="col-4 box-search">
                <input type="text" id="search" name="search" class="input-search" value="{{$search??''}}"  placeholder="Search...">
                <label for="search" class="icon-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>

            <div class="col-1">
                <button class="btn-search" id="btn-course-search">
                    Search
                </button>
            </div>
            <!-- </form> -->
        </div>

        <div class="container filter">
        <div class="mt-20 border-btn-input filter-form row ">
                <span class="mr-30">Lọc theo</span>
                <div class="form-group row mr-10">
                    <div class="mr-10">
                        <input type="radio" id="newest" name="created_time" value= "{{ config('course.newest') }}" class="form-control hidden" checked
                         />
                        <label for="newest" class="newest">Newest</label>
                    </div>
                    <div class="mr-10">
                        <input type="radio" id="oldest" name="created_time" value="{{ config('course.oldest') }}" class="form-control hidden"
                         />
                        <label class="oldest" for="oldest">Oldest</label>
                    </div>
                </div>
                <div class="form-group mr-10">
                    <select name="teachers[]" id="teacher" class="select2-multiple teacher-placeholder-multiple mr-10" multiple="multiple">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                            >
                            {{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-10">
                    <select name="learner" id="learner" class="js-example-select2">
                        <option value="">Số người học</option>
                        <option value="{{ config('course.sort_low_to_hight') }}"
                        
                        >Tăng dần</option>
                        <option value="{{ config('course.sort_hight_to_low') }}"
                        
                        >Giảm dần</option>
                    </select>
                </div>
                <div class="form-group mr-10">
                    <select name="time" id="time" class="js-example-select2">
                        <option value="">Thời gian học</option>
                        <option value="{{ config('course.sort_low_to_hight') }}"
                        
                        >Tăng dần</option>
                        <option value="{{ config('course.sort_hight_to_low') }}"
                        
                        >Giảm dần</option>
                    </select>
                </div>
                <div class="form-group mr-10">
                    <select name="lesson" id="lesson" class="js-example-select2">
                        <option value="">Số bài học</option>
                        <option value= "{{ config('course.sort_low_to_hight') }}"
                        
                        >Tăng dần</option>
                        <option value="{{ config('course.sort_hight_to_low') }}"
                        
                        >Giảm dần</option>
                    </select>
                </div>
                <div class="form-group mr-10 ml-75">
                    <select name="tags[]" id="tags" class="js-example-select2 js-example-placeholder-multiple-tag" multiple="multiple">
                        <option value="">Tags</option>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"
                            
                            >{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-10">
                    <select name="rate" id="rate" class="js-example-select2">
                        <option value="">Reviews</option>
                        <option value="{{ config('course.sort_low_to_hight') }}"
                        >
                        Tăng dần</option>
                        <option value="{{ config('course.sort_hight_to_low') }}"
                        >
                        Giảm dần</option>
                    </select>
                </div>
            </div>
        </div>

        
        <div class="row list-item ">
            @if(!empty($courses))
            @foreach($courses as $course)
            <div class="col-6 mb-3">
                <div class="row">
                    <div class="col-11 box-item">
                        <div class="row course-item">
                            <div class="col-3">
                                <img class="img-item" src="{{ $course->image??'' }}" alt="" >
                            </div>

                            <div class="col-8 item-content">
                                <div class="item-title">
                                    {{$course->name??''}}
                                </div>
                                <div class="item-description">
                                    {{$course->describe??''}}
                                </div>

                                <div>
                                    <button class="btn-more">
                                        more
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-3">
                                <div class="course-learners">
                                    Learners
                                </div>
                                <div class="course-number">
                                    {{ $course->total_learners }}
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="course-learners">
                                    Lessons
                                </div>
                                <div class="course-number">
                                    {{ $course->total_lessons }}
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="course-learners">
                                    Times
                                </div>
                                <div class="course-number">
                                    {{ $course->total_times }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

    
            
        </div>
        {{ $courses->appends(request()->query())->links() }}
    </div>
</section>
@endsection
