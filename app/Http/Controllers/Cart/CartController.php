<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){

        $carts = Cart::where('user_id', Auth::user()->id)->get();
        

        return view('cart.mycart', compact('carts'));
    }
    public function store($id){
        
        $duplicate = Cart::where('course_id',$id)->where('user_id', Auth::user()->id)->first();
        $duplicateCourse = Inventory::where('course_id',$id)->where('user_id', Auth::user()->id)->first();
        if($duplicate || $duplicateCourse){
            return back()->with('error','Your item already in cart');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'course_id'=> $id
        ]);

        return redirect('/mycart')->with('success', 'Your Item has been added to cart');
    }
}
