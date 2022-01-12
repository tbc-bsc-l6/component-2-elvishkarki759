<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{




    // public function create()
    // {
    //     return view('user.newsletter');
    // }

    // public function store(Request $request)
    // {
    //     if ( ! Newsletter::isSubscribed($request->email) ) 
    //     {
    //         Newsletter::subscribePending($request->email);
    //         return redirect('newsletter')->with('success', 'Thanks For Subscribe');
    //     }
    //     return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');
            
    // }


    public function subscribe(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);

        try{
            if(Newsletter::isSubscribed($request->email)){
                return redirect()->back()->with('error','Email already Subscribed!');
            }else{
                Newsletter::subscribe($request->email);
            return redirect()->back()->with('success','Email Subscribed!');
            }
        } catch(\Exception $e){
            
            return redirect()->back()->with('error',$e->getMessage());

        }

    }
}
