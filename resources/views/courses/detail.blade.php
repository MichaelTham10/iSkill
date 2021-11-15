@extends('layouts.app')

@section('title', 'class')

@section('style')
    <link href="{{ asset('css/courses/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            
            <div class="dropdown show">
                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/icon/burger.png')}}" alt="">
                </a>
              
                <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                    @foreach ($details as $detail)
                        <form action="/course-status/{{$detail->id}}/{{$getVideo->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="dropdown-item btn btn-light" type="submit">{{$detail->title}}</button>
                                <i class="fa fa-check" style="{{$detail->status ? 'display: block' : 'display: none'}}"></i>
                            </div>
                           
                            
                           
                        </form>
                    @endforeach
                </div>
            </div>  

            <form action="/next-btn/{{$getVideo->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="">
                    <button type="submit" class="next-btn">Tandai selesai & lanjutkan course berikutnya</button>
                </div>
                 
            </form>
            
        </div>
        
        <div>
            <h1>{{$getVideo->title}}</h1>
            <iframe src="{{$getVideo->video}}" frameborder="0" width="100%" height="720px"></iframe>
            
        </div>
    </div>
    
@endsection

