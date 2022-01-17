@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/admin/add_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Add Course')

@section('content')
    
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        <h2 class="pt-4 text-center">Add Courses</h2>
        <form action="/store-course" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Categories</label>
                <select id="" class="form-control" name="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

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
                <input type="text" class="form-control" id="" name="name" aria-describedby="" placeholder="Enter name">
                
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" id="" aria-describedby="" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea placeholder="Enter description" name="description" class="form-control" id="" rows="3"></textarea>
              </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" id="" aria-describedby="">
            </div>


            <button type="submit" id="btn_submit">Add Course</button>
        </form>
        <h2 class="pt-4 text-center">Add Course Detail</h2>
        <form action="/store-detail" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Courses</label>
                <div class="form-group">
                    <select id="" class="form-control" name="course">
                        @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="">Video Link ex : https://www.youtube.com/embed/vdRlr2TdjTc (embed version)</label>
                    <input type="text" class="form-control" name="link" id="" aria-describedby="" placeholder="Enter link">
                </div>

                <button type="submit" id="btn_submit">Add Detail</button>
            </div>
        </form>
    </div>
@endsection