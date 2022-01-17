@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/admin/add_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Update Category')

@section('content')
    
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        <h2 class="pt-4 text-center">Update Category</h2>
        <form action="/patch-category/{{$category->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="" name="name" aria-describedby="" value="{{$category->name}}" placeholder="Enter name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <img src="{{ asset('/storage/'.$category->image)}}" width="300px" height="300px" alt="">
                <br>
                <label for="">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="" aria-describedby="">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" id="btn_submit">Update Category</button>
        </form>
        
    </div>
@endsection