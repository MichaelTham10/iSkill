@extends('layouts.app')

@section('title', 'class')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/class/class.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container class">
        <div class="wrapper">
            <p id="title" class="text-center wow fadeInUp">Kursus Ilmu Komputer</p>
            <div id="top-class">
                <p id="top-class-title">Kelas Paling Top</p>
                <div class="d-flex align-items-center">
                    <div class="row" id="top-class-detail">
                        <div class="col-7">
                            <p id="detail-class-title">Membuat website dengan laravel</p>
                            <div class="d-flex align-items-center" id="rating">
                                
                                <span id="star-1" class="fa fa-star"></span>
                                <span id="star-2" class="fa fa-star"></span>
                                <span id="star-3" class="fa fa-star"></span>
                                <span id="star-4" class="fa fa-star"></span>
                                <span id="star-5" class="fa fa-star"></span>
                                <span>(550)</span>
                            </div>
                            <p id="detail-class-price">Rp.150.000</p>
                        </div>
                        <div id="detail-class-img" class="col-5"></div>
                    </div>
                    <div class="row" id="top-class-detail">
                        <div class="col-7">
                            <p id="detail-class-title">Membuat website dengan laravel</p>
                            <div class="d-flex align-items-center" id="rating">
                                
                                <span id="star-1" class="fa fa-star"></span>
                                <span id="star-2" class="fa fa-star"></span>
                                <span id="star-3" class="fa fa-star"></span>
                                <span id="star-4" class="fa fa-star"></span>
                                <span id="star-5" class="fa fa-star"></span>
                                <span>(550)</span>
                            </div>
                            <p id="detail-class-price">Rp.150.000</p>
                        </div>
                        <div id="detail-class-img" class="col-5"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="other-class">
            <p class="other-class-title">Kelas Lainnya</p>
            <div id="grid-wrapper">
                <div id="grid-item">
                    <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
                    <div id="grid-item-desc">
                        <p id="grid-item-title">Title</p>
                        <div class="d-flex align-items-center" id="grid-rating">
                                    
                            <span id="star-1" class="fa fa-star"></span>
                            <span id="star-2" class="fa fa-star"></span>
                            <span id="star-3" class="fa fa-star"></span>
                            <span id="star-4" class="fa fa-star"></span>
                            <span id="star-5" class="fa fa-star"></span>
                            <span>(550)</span>
                        </div>
                        <p id="grid-item-price">Rp.150.000</p>
                    </div>
                </div>
                <div id="grid-item">
                    <img src="{{asset('assets/dummy/dummy2.png')}}" alt="">
                    <div id="grid-item-desc">
                        <p id="grid-item-title">Title</p>
                        <div class="d-flex align-items-center" id="grid-rating">
                                    
                            <span id="star-1" class="fa fa-star"></span>
                            <span id="star-2" class="fa fa-star"></span>
                            <span id="star-3" class="fa fa-star"></span>
                            <span id="star-4" class="fa fa-star"></span>
                            <span id="star-5" class="fa fa-star"></span>
                            <span>(550)</span>
                        </div>
                        <p id="grid-item-price">Rp.150.000</p>
                    </div>
                </div>
                <div id="grid-item">
                    <img src="{{asset('assets/dummy/dummy2.png')}}" alt="">
                    <div id="grid-item-desc">
                        <p id="grid-item-title">Title</p>
                        <div class="d-flex align-items-center" id="grid-rating">
                                    
                            <span id="star-1" class="fa fa-star"></span>
                            <span id="star-2" class="fa fa-star"></span>
                            <span id="star-3" class="fa fa-star"></span>
                            <span id="star-4" class="fa fa-star"></span>
                            <span id="star-5" class="fa fa-star"></span>
                            <span>(550)</span>
                        </div>
                        <p id="grid-item-price">Rp.150.000</p>
                    </div>
                </div>
                <div id="grid-item">
                    <img src="{{asset('assets/dummy/dummy2.png')}}" alt="">
                    <div id="grid-item-desc">
                        <p id="grid-item-title">Title</p>
                        <div class="d-flex align-items-center" id="grid-rating">
                                    
                            <span id="star-1" class="fa fa-star"></span>
                            <span id="star-2" class="fa fa-star"></span>
                            <span id="star-3" class="fa fa-star"></span>
                            <span id="star-4" class="fa fa-star"></span>
                            <span id="star-5" class="fa fa-star"></span>
                            <span>(550)</span>
                        </div>
                        <p id="grid-item-price">Rp.150.000</p>
                    </div>
                </div>
                <div id="grid-item">
                    <img src="{{asset('assets/dummy/dummy2.png')}}" alt="">
                    <div id="grid-item-desc">
                        <p id="grid-item-title">Title</p>
                        <div class="d-flex align-items-center" id="grid-rating">
                                    
                            <span id="star-1" class="fa fa-star"></span>
                            <span id="star-2" class="fa fa-star"></span>
                            <span id="star-3" class="fa fa-star"></span>
                            <span id="star-4" class="fa fa-star"></span>
                            <span id="star-5" class="fa fa-star"></span>
                            <span>(550)</span>
                        </div>
                        <p id="grid-item-price">Rp.150.000</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection