@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/manage_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Category')

@section('content')
    <div class="container">
        <p class="text-center wow fadeInDown" id="title">Pilih Kategori</p>
        
    </div>
    <div class="pt-5">
        <div class="" id="category">
            @foreach ($categories as $category)
                <div>
                    <a href="/managing-courses/{{$category->id}}">
                        <div id="list" style="background-image: url({{ asset('/storage/'.$category->image)}})">
                            <div id="list-wrapper">
                                <span>{{$category->name}}</span>
                            </div>
                        </div>
                    </a>

                    <div class="d-flex mb-3" id="control_btn">
                        <a href="/update-category/{{$category->id}}"><button>Update</button></a> 
                        
                        <form action="/delete-category/{{$category->id}}" method="POST">
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

