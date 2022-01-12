<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\books;
use App\Models\cds;
use App\Models\games;

class HomeController extends Controller
{
    //login
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return redirect('/showbooks');
        }
        else{
            $data=books::paginate(6);
            return view('user.home',compact('data'));
        }
    }

    public function index(){


        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data=books::paginate(6);
            return view('user.home',compact('data'));

        }
    }

    public function search(Request $request){
        $search=$request->search;

        $data = books::where('title','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));

    }

    // public function subscribe(Request $request){
    //     $request->validate([
    //         'emailaddress'=>'required|email'
    //     ]);
    // }
    
}
