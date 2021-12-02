@extends('layouts.app')

@section('title', 'class')
    
@section('style')
    <link href="{{ asset('css/courses/preview.css') }}" rel="stylesheet">
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
            <form action="/cart/{{$course->id}}" method="POST">
                @csrf
                <button type="submit" class="cart_btn">
                    <div>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                        Add to cart
                    </div>
                </button>
            </form>
            
            
            
       </div>
    </div>
    
    {{-- <a href="/course/detail/{{$detail->id}}" class="btn btn-primary">{{$detail->title}}</a> --}}
    
</div>
    
@endsection