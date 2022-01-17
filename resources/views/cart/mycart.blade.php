@extends('layouts.app')

@section('title', 'My Cart')

@section('style')
    <link href="{{ asset('css/cart/mycart.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="content">
        <div class="row">
            <div class="col-8">
                <h3 class="shadow p-3 mb-5 bg-white rounded">Your Cart</h3>



                @if ($carts->isEmpty())
                    <div class="shadow p-3 mb-5 bg-white rounded">Your Cart is Empty</div>
                @else
                    
                    @foreach ($carts as $cart)
                        <div class="shadow p-3 py-4 mb-5 bg-white rounded d-flex align-items-center">
                            <img class="rounded mx-3" width="100px" height="100px" src="{{ asset('/storage/'. $cart->course->image)}}" alt="">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="w-75">
                                    <p>{{$cart->course->name}}</p>
                                    <p>{{$cart->course->description}}</p>
                                </div>
                                <p class="mr-5">Rp. {{number_format($cart->course->price)}}</p>
                            </div>
                            
                        </div>
                        
                    @endforeach
                @endif

               
            </div>
            @php
                $total = 0;
            @endphp
            <div class="col-4">
                <h3 class="shadow p-3 mb-5 bg-white rounded">Cart Totals</h3>
                <div class="shadow p-3 mb-5 bg-white rounded ">
                    @foreach ($carts as $cart)
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="w-75">{{$cart->course->name}}</p>
                            <p>Rp. {{number_format($cart->course->price)}}</p>
                            @php
                                $total += $cart->course->price
                            @endphp
                        </div>
                    @endforeach
                    <hr>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Total : </p>
                        <p>Rp. {{number_format($total)}}</p>
                    </div>
                    <form action="/order" method="POST">
                        @csrf
                        <button class="btn btn-primary">Order Item</button>
                    </form>
                    
                </div>
            
            </div>
        </div>
    </div>
@endsection