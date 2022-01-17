@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/manage_category.css') }}" rel="stylesheet">
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
                    <div id="list" style="background-image: url({{$category->image}})">
                        <div id="list-wrapper">
                            <span>{{$category->name}}</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="control_btn">
                        <a href=""><button>Update</button></a> 
                        <form action="">
                            <button>Delete</button>
                        </form>
                    </div>
                   
                </div>
                
            @endforeach 
        </div>
        
    </div>
@endsection

