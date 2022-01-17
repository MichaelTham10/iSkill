@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    
@endsection

@section('title', 'Category')

@section('content')
    <div class="container">
        <p class="text-center wow fadeInDown" id="title">Kategori</p>
       
    </div>
    <div class="pt-5">
        @include('components.category-grid', ['categories' => $categories])
    </div>
@endsection

