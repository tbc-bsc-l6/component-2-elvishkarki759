<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\books;

class BookController extends Controller
{
    
    //for books 
    public function books(){
        $usertype=Auth::user()->usertype;
        if($usertype==1){
            return view('admin.books');
        }
        else{
            $data=books::paginate(6);
            return view('user.books',compact('data'));
        }
    }

    public function uploadbooks(Request $request){
        $data = new books;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('bookimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('alert', 'Book Added Successfully!');

    }

    

}
