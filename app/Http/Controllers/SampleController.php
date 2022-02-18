<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index(Request $request){

        $data = $request->put()->get('key');
        $data[] = [ 'key' => 1];

        // $data = Session::get('key'); 
        return view('sample',compact('data'));
    }

    public function front(){
        return view('front');

    }
}
