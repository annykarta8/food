<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.user', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view('admin.foodmenu', compact('data'));
    }
    public function createview()
    {

        return view('admin.createview');
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function upload(Request $request)
    {
        $data = new food;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();

    }
}