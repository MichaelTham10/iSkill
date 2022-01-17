@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/admin/add_courses.css') }}" rel="stylesheet">
@endsection

@section('title', 'Update Detail')

@section('content')
    <div class="container">
    @if(Session::has('success'))
            
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    <h2 class="pt-4 text-center">Update Course Detail</h2>
    <form action="/patch-detail/{{$detail->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            
           
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="" aria-describedby="" value="{{$detail->title}}" placeholder="Enter title">
                @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <div class="form-group">
                <iframe src="{{$detail->video}}" width="500px" height="300px" frameborder="0"></iframe>
                <br>
                <label for="">Video Link ex : https://www.youtube.com/embed/vdRlr2TdjTc (embed version)</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="" aria-describedby="" value="{{$detail->video}}" placeholder="Enter link">
                @error('link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" id="btn_submit">Update Detail</button>
        </div>
    </form>
    </div>
@endsection