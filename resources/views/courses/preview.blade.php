@extends('layouts.app')

@section('title', 'class')
<link href="{{ asset('css/courses/preview.css') }}" rel="stylesheet">
@section('style')
    
@endsection

@section('content')
<div class="d-flex content">
    <iframe src="{{$detail->video}}" width="50%" height="500px" frameborder="0"></iframe>

    <div id="classDescription">
        <div id="top_item">
            <p id="course-name">{{$course->name}}</p>
            <p>{{$course->description}}</p>
            <h3>Daftar Kelas</h3>
            
            <div id="details">
                @foreach ($course->details as $detail)
                <p>{{$detail->title}}</p>
                
                @endforeach
            </div>
        </div>
        
       <div class="d-flex btm_item">
            <div class="price">
                <span>IDR {{number_format($course->price)}}</span> 
            </div>
            <button class="cart_btn">
                <div>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                    Add to cart
                </div>
            </button>
       </div>
    </div>
    
    {{-- <a href="/course/detail/{{$detail->id}}" class="btn btn-primary">{{$detail->title}}</a> --}}
    
</div>
    
@endsection