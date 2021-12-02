@extends('layouts.app')

@section('title', 'class')
    
@section('style')
    
@endsection

@section('content')
    <div class="text-align-center">
        Your Courses
    </div>
    @if ($inventories->isEmpty())
        <p>No Courses in here</p>
    @else
        <div>
            @foreach ($inventories as $inventory)
                <p>{{$inventory->course->name}}</p>
            @endforeach
        </div>
    @endif
    
@endsection