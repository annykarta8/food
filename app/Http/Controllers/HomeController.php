<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\Food;
use App\Models\User;
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
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home', compact('data'));
        }
    }
}