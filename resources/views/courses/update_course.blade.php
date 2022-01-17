@extends('layouts.app')

@section('style')
    
    <link href="{{ asset('css/admin/add_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Update Course')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        <h2 class="pt-4 text-center">Update Courses</h2>
        <form action="/patch-course/{{$course->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Lecturer</label>
                <select id="" class="form-control" name="lecturer">
                    @foreach ($lecturers as $lecturer)
                        <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Name</label> 
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="" name="name"  aria-describedby="" value="{{$course->name}}" placeholder="Enter name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id=""  aria-describedby="" value="{{$course->price}}" placeholder="Enter price">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea placeholder="Enter description" name="description" class="form-control @error('description') is-invalid @enderror" id="" rows="3">{{$course->description}}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            
            <button type="submit" id="btn_submit">Update Course</button>
        </form>
    </div>
@endsection