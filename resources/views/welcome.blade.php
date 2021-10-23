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
    <div id="mid-wrapper">
        <div class="d-flex justify-content-between align-items-center" id="mid">
            <h2>Kategori</h2>
            <a href="">Lihat semua</a>
        </div>
        <div>

      
        <div class="d-flex" id="category">
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
            
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
            <div id="list">
                <div id="list-wrapper">
                    <span>Ilmu Komputer</span>
                </div>
            </div>
        </div>
        
        <div id="bot">
            <h2>Apa sih keuntungannya belajar di ISKILL?</h2>
            <div class="d-flex animate__animated animate__fadeInUp" id="bot-content">
                <div class="d-flex" id="bot-detail">
                    <img id="icons" src="{{asset('assets/icon/sertif.png')}}" alt="">
                    <div>
                        <p id="description-title">Sertifikat</p>
                        <span id="description-text">Kamu akan mendapatkan setrifikat setelah menyelesaikan kelas yang kamu ambil.</span>
                    </div>
                </div>
                <div class="d-flex" id="bot-detail">
                    <img id="icons" src="{{asset('assets/icon/globe.png')}}" alt="">
                    <div>
                        <p id="description-title">Penyaluran Kerja</p>
                        <span id="description-text">Setelah kamu menguasai skill favoritemu, kamu akan disalurkan berkerja di perusahaan ternama.</span>
                    </div>
                </div>
                <div class="d-flex" id="bot-detail">
                    <img id="icons" src="{{asset('assets/icon/time.png')}}" alt="">
                    <div>
                        <p id="description-title">Waktu Fleksibel</p>
                        <span id="description-text">Waktu belajar yang sangat fleksibel, kamu dapat belajar dimanapun dan kapanpun.</span>
                    </div>
                </div>
                <div class="d-flex" id="bot-detail">
                    <img id="icons" src="{{asset('assets/icon/update.png')}}" alt="">
                    <div>
                        <p id="description-title">Materi Terupdate</p>
                        <span id="description-text">Kamu akan terus mendapatkan materi-materi terbaru untuk kelas yang kamu ambil.</span>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection