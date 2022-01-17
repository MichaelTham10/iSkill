@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/manage_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Category')

@section('content')
    <div class="container">
        <p class="text-center wow fadeInDown" id="title">Pilih Kursus</p>
        
    </div>
    <div class="pt-5">
        <div class="" id="category">
            @foreach ($courses as $course)
                <div>
                    <a href="/update-course/{{$course->id}}">
                        <div id="list" style="background-image: url({{ asset('/storage/'.$course->image)}})">
                            <div id="list-wrapper">
                                <span>{{$course->name}}</span>
                            </div>
                        </div>
                    </a>
                    
                    <div class="d-flex mb-3" id="control_btn">
                        <a href="/managing-detail/{{$course->id}}"><button>Detail</button></a> 

                        <form action="/delete-course/{{$course->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                
            @endforeach 
        </div>
        
    </div>
@endsection

