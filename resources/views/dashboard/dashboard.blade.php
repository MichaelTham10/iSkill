@extends('layouts.app')

@section('title', 'class')
    
@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="text-center mt-5">
        <h1>Hello, {{Auth::user()->name}}</h1>
        <h3>Your Courses</h3>
    </div>
    <div class="container">
        @if ($inventories->isEmpty())
            <p>No Courses in here</p>
        @else
            <div class="pt-5">
                @php
                    $detailId = 0;
                @endphp
                <div class="" id="category">
                    @foreach ($inventories as $inventory)
                        <div>
                           
                            @php
                                $detailId = $inventory->course->details[0]->id
                            @endphp
                           
                            
                            <a href="/course/detail/{{$detailId}}">
                                <div id="list" style="background-image: url({{ asset('/storage/'.$inventory->course->image)}})">
                                    <div id="list-wrapper">
                                        <span>{{$inventory->course->name}}</span>
                                    </div>
                                </div>
                            </a>
        

                        </div>
                        
                    @endforeach 
                </div>
                
            </div>
            
        @endif
    </div>
   
    
@endsection