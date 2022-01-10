<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\book;


class BookController extends Controller
{
    
    //for books 
    public function books()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.books');
        }
        else{
            $data=books::paginate(6);
            return view('user.books',compact('data'));
        }
    }

    public function book(){
        if(Auth::id()){
            return $this->books('/books');
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
    public function showbooks(){
        $data=books::all();
        return view('admin.showbooks',compact('data'));
    }

    public function deletebooks($id){
        $data=books::find($id);
        $data->delete();
        return redirect()->back()->with('alert', 'Book Deleted Successfully!');

    }

    public function updatebooks($id){
        $data=books::find($id);
        return view('admin.updatebooks',compact('data'));

    }

    public function updatebook(Request $request, $id){
        $data = books::find($id);
        $image = $request->file;
        if($image){   
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('bookimage',$imagename);
        $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('alert', 'Book Updated Successfully!');
    }

    public function search(Request $request){
        $search=$request->search;
        if($search==''){
            $data=books::paginate(6);
            return view('user.books',compact('data'));
        }

        $data = books::where('title','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));

    }

}



