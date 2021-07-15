<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\chef;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        $data2 = chef::all();
        return view('home', compact("data", "data2"));
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = chef::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {

            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();

            return view('home', compact('data', 'data2', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;
            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        return view('showcart');
    }
}