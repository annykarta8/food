<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\Food;
use App\Models\reservation;
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

    public function createchef()
    {

        return view('admin.createchef');
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);
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

    public function reservation(Request $request)
    {
        $data = new reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();

    }

    public function viewreservation()
    {
        $data = reservation::all();
        return view('admin.adminreservation', compact('data'));
    }

    public function viewchef()
    {
        $data = chef::all();
        return view('admin.adminchef', compact('data'));
    }

    public function uploadchef(Request $request)
    {
        $data = new chef;
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();

    }

    public function updatechef($id)
    {
        $data = chef::find($id);
        return view('admin.updatechef', compact('data'));
    }

    public function updatefoodchef(Request $request, $id)
    {
        $data = chef::find($id);
        $image = $request->image;
        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();

        return redirect()->back();

    }

    public function deletechef($id)
    {
        $data = chef::find($id);
        $data->delete();
        return redirect()->back();
    }
}