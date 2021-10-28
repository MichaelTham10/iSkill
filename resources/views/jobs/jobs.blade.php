@extends('layouts.app')

@section('title', 'Jobs')

@section('style')
    <link href="{{ asset('css/jobs/jobs.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="main">
        <div id="wrapper">
            <p id="title">Lowongan Kerja Terbaru</p>
            <div class="d-flex justify-content-between align-items-center" id="top-choice">
                <div class="d-flex justify-content-center align-items-center" id="icon">
                    <span class="fa fa-angle-left"></span>
                </div>
                <div id="top-wrapper">
                    <div class="d-flex align-items flex-wrap">
                        <div id="top-item">
                            <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                            <p>Company Title</p>
                        </div>
                        <div id="top-item">
                            <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                            <p>Company Title</p>
                        </div>
                        <div id="top-item">
                            <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                            <p>Company Title</p>
                        </div>
                        <div id="top-item">
                            <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                            <p>Company Title</p>
                        </div>
                        <div id="top-item">
                            <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                            <p>Company Title</p>
                        </div>
                        
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center" id="icon">
                    <span class="fa fa-angle-right"></span>
                </div>
                
            </div>
        </div>
    </div>
    <div id="content">
        <p id="title-content">Lowongan Kerja Tokopedia</p>
        <div class="d-flex align-items-center flex-wrap" id = "item-content">
            <div id="item-detail-content">
                <div id="item-detail">
                    <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                    <p id="item-detail-title" class="text-center">Company Title</p>
                    <p id="item-detail-time" class="text-center">Time</p>
                    <div id="item-detail-identity" >
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span id="clock">Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>

                    </div>
                    <button id="apply-btn">Apply</button>
                </div>
            </div>
            <div id="item-detail-content">
                <div id="item-detail">
                    <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                    <p id="item-detail-title" class="text-center">Company Title</p>
                    <p id="item-detail-time" class="text-center">Time</p>
                    <div id="item-detail-identity" >
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span id="clock">Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>

                    </div>
                    <button id="apply-btn">Apply</button>
                </div>
            </div>
            <div id="item-detail-content">
                <div id="item-detail">
                    <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                    <p id="item-detail-title" class="text-center">Company Title</p>
                    <p id="item-detail-time" class="text-center">Time</p>
                    <div id="item-detail-identity" >
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span id="clock">Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>

                    </div>
                    <button id="apply-btn">Apply</button>
                </div>
            </div>
            <div id="item-detail-content">
                <div id="item-detail">
                    <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                    <p id="item-detail-title" class="text-center">Company Title</p>
                    <p id="item-detail-time" class="text-center">Time</p>
                    <div id="item-detail-identity" >
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span id="clock">Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>

                    </div>
                    <button id="apply-btn">Apply</button>
                </div>
            </div>
            <div id="item-detail-content">
                <div id="item-detail">
                    <img src="{{asset('assets/dummy/dummy3.png')}}" width="100px" height="100px" alt="">
                    <p id="item-detail-title" class="text-center">Company Title</p>
                    <p id="item-detail-time" class="text-center">Time</p>
                    <div id="item-detail-identity" >
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span id="clock">Location</span>
                        </div>
                        <div class="d-flex align-items-center" id="desc-wrapper">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Location</span>
                        </div>

                    </div>
                    <button id="apply-btn">Apply</button>
                </div>
            </div>
            
           
        </div>
    </div>
@endsection