<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $inventories = Inventory::where('user_id', Auth::user()->id)->get();

        return view('dashboard.dashboard', compact('inventories'));
    }
}
