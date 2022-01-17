@extends('layouts.app')

@section('title', 'class')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/courses/courses.css') }}" rel="stylesheet">
@endsection

@section('content')
    @if(Session::has('alert'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ Session::get('alert') }}</strong>
        </div>
    @endif
    <div class="container class">
        <div class="wrapper">
            <p id="title" class="text-center wow fadeInUp">Kursus Ilmu Komputer</p>
            <div id="top-class">
                <p id="top-class-title">Kelas Paling Top</p>
                <div class="d-flex align-items-center">
                    @foreach ($topCourse as $item)
                    <div class="row" id="top-class-detail">
                        <div class="col-7">
                            <br>
                            <br>
                            <div style=" height: 67px; overflow: hidden;">
                                <p style="font-size: 21px">{{$item->name}}</p>
                            </div>
                                <div class="d-flex align-items-center" id="rating">
                                    
                                    <span id="star-1" class="fa fa-star"></span>
                                    <span id="star-2" class="fa fa-star"></span>
                                    <span id="star-3" class="fa fa-star"></span>
                                    <span id="star-4" class="fa fa-star"></span>
                                    <span id="star-5" class="fa fa-star"></span>
                                    <span>{{$item->rate_count}}</span>
                                </div>
                            <p id="detail-class-price">Rp. {{number_format($item->price)}}</p>
                        </div>
                        <div>
                            <img class="pt-5 pr-2" src="{{asset('/storage/'.$item->image)}}" width="200px" height="200px" alt="">

                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

        <div class="other-class">
            <p class="other-class-title">Kelas Lainnya</p>
            <div id="grid-wrapper">
                @foreach ($courses as $course)
                    <div id="grid-item">
                        <img src="{{ asset('/storage/'. $course->image)}}" alt="">
                        <div id="grid-item-desc">
                            <a href="/course/preview/{{$course->id}}" id="grid-item-title">{{$course->name}}</a> 
                            <div class="d-flex align-items-center" id="grid-rating">
                                        
                                <span id="star-1" class="fa fa-star"></span>
                                <span id="star-2" class="fa fa-star"></span>
                                <span id="star-3" class="fa fa-star"></span>
                                <span id="star-4" class="fa fa-star"></span>
                                <span id="star-5" class="fa fa-star"></span>
                                <span>({{$course->rate_count}})</span>
                            </div>
                            <p id="grid-item-price">Rp. {{number_format($course->price)}}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
@endsection