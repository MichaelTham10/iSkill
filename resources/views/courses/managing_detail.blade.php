@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/manage_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Category')

@section('content')
    <div class="container">
        <p class="text-center wow fadeInDown" id="title">Pilih Detail</p>  
    </div>
    <div class="pt-5">
        <div class="" id="category">
            @foreach ($details as $detail)
                <div>
                    <iframe src="{{$detail->video}}" width="300px" height="300px" frameborder="0"></iframe>
                    <p class="color-black">{{$detail->title}}</p>

                    <div class="d-flex mb-3" id="control_btn">
                        <a href="/update-detail/{{$detail->id}}"><button>Update</button></a>
                        
                    </div>
                    
                </div>
                
            @endforeach 
        </div>
        
    </div>
@endsection

