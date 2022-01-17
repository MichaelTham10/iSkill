@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/admin/add_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Add Category')

@section('content')
    
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        <h2 class="pt-4 text-center">Add Category</h2>
        <form action="/store-category" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="" name="name" aria-describedby=""  placeholder="Enter name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
               
                <label for="">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="" aria-describedby="">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" id="btn_submit">Add Category</button>
        </form>
        
    </div>
@endsection