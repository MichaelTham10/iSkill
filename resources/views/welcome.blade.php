@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('title', 'Welcome')


@section('content')
    <div id="main">
        <div class="d-flex justify-content-center" id="top-content">
            <div class="animate__animated animate__fadeInLeft" id="description">
                <h1>Ayo tingkatkan skill mu, pada bidang yang kamu sukai!</h1>
                <p>Pilih kelas sesuai dengan bidang yang kamu inginkan</p>
                <button id="btn-register" class="btn">Daftar Sekarang</button>
            </div>
            <div class="animate__animated animate__zoomIn" id="image">
                <img src="{{asset('assets/welcome-pic.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center" id="mid">
            <h2>Kategori</h2>
            <a href="">Lihat semua</a>
        </div>
        <div class="d-inline" id="category">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">

            <img src="{{asset('assets/dummy/dummy1.png')}}" alt="">
            
        </div>
        
    </div>
@endsection