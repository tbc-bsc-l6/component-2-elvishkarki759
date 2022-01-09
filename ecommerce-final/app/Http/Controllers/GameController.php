<?php

namespace App\Http\Controllers;
use App\Models\games;
use App\Models\game;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class GameController extends Controller
{
    //for games 
    public function games()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.games');
        }
        else{
            $data=games::paginate(6);
            return view('user.games',compact('data'));
        }
    }

    public function game(){
        if(Auth::id()){
            return $this->games('/games');
        }
        else{
            $data=games::paginate(6);
            return view('user.games',compact('data'));
        }
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

    public function showgames(){
        $data=games::all();
        return view('admin.showgames',compact('data'));
    }

    public function deletegames($id){
        $data=games::find($id);
        $data->delete();
        return redirect()->back()->with('alert', 'Game Deleted Successfully!');

    }

    public function updategames($id){
        $data=games::find($id);
        return updategames('admin.updategames',compact('data'));

    }

}
