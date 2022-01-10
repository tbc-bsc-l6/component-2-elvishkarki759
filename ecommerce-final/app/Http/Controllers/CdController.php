<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\cds;
use App\Models\cd;



class CdController extends Controller
{
    //for cds 
    public function cds()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.cds');
        }
        else{
            $data=cds::paginate(6);
            return view('user.cds',compact('data'));
        }
    }

    public function cd(){
        if(Auth::id()){
            return $this->cds('/cds');
        }
        else{
            $data=cds::paginate(6);
            return view('user.cds',compact('data'));
        }
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

    public function showcds(){
        $data=cds::all();
        return view('admin.showcds',compact('data'));
    }

    public function deletecds($id){
        $data=cds::find($id);
        $data->delete();
        return redirect()->back()->with('alert', 'CD Deleted Successfully!');

    }

    public function updatecds($id){
        $data=cds::find($id);
        return view('admin.updatecds',compact('data'));

    }

    public function updatecd(Request $request, $id){
        $data = cds::find($id);
        $image = $request->file;
        if($image){   
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('cdimage',$imagename);
        $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('alert', 'CD Updated Successfully!');
    }

    public function search(Request $request){
        $search=$request->search;
        if($search==''){
            $data=cds::paginate(6);
            return view('user.cds',compact('data'));
        }

        $data = cds::where('title','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));

    }

}
