<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();

        foreach($carts as $cart){

            
            Inventory::create([
                'user_id' => $cart->user->id,
                'course_id' => $cart->course->id
            ]);
        }

        $carts = Cart::where('user_id', Auth::user()->id)->delete();

        return redirect('/')->with('success', 'Your order has been completed');

    }
}
