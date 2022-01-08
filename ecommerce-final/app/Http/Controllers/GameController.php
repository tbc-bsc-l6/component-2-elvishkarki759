<?php

namespace App\Http\Controllers;
use App\Models\games;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //for games 
    public function games(){
        return view('admin.games');
    }

    public function uploadgames(Request $request){
        $data = new games;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('gameimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('alert', 'Game Added Successfully!');

    }
}
