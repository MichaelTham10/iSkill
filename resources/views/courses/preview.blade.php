@extends('layouts.app')

@section('title', 'class')

@section('style')
    
@endsection

@section('content')
    <p>{{$course->name}}</p>
    <a href="/course/detail/{{$detail->id}}" class="btn btn-primary">{{$detail->title}}</a>
    <iframe src="{{$detail->video}}" frameborder="0"></iframe>
@endsection