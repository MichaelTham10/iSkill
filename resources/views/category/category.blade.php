@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/components/category-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    
@endsection

@section('title', 'Category')

@section('content')
    <div class="container">
        <p class="text-center wow fadeInDown" id="title">Kategori</p>
        <form action="">
            <div class="d-flex align-items-center" id="search-bar">
                <input type="text" id="search" class="form-control">
                <img src="{{asset('assets/icon/search.png')}}" alt="">
            </div>
        </form>  
    </div>
    <div class="pt-5">
        @include('components.category-grid')
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#search-bar').keydown(function(event) {
            
            if (event.keyCode == 13) {
                    this.form.submit();
                    return false;
                }
            });

        });
    </script>
@endsection