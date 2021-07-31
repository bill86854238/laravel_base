<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $user = User::get();


        $data =array();
        $data['year'] = date('Y');
        $data['user'] = $user;
        return view ('index',$data);
    }

    public function postData(Request $request){
        $desc  = $request->input('desc');

        $par= new User();
        $par->name= $desc;
        $par->save();

        $user = User::get();

        $data =array();
        $data['year'] = $desc;
        $data['user'] = $user;
        return view ('index',$data);
    }
}
