<?php

namespace App\Http\Controllers;
use App\Models\cds;

use Illuminate\Http\Request;

class CdController extends Controller
{
    //for cds 
    public function cds(){
        return view('admin.cds');
    }


    public function uploadcds(Request $request){
        $data = new cds;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('cdimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('alert', 'CD Added Successfully!');

    }

}
