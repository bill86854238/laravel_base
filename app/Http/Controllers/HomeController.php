<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $user = User::get();
//        $user = User::where('id',1)->get();

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
        $id= $par->id;

        $user = User::where('id',$id)->get();
        $arr =array();
        foreach ($user as $k => $v){
            $arr[$v['id']]= $v['name'];
        }

        $data =array();
        $data['year'] = $id;
        $data['user'] = $user;
        $data['json'] = json_encode($arr);
        return view('index',$data);
    }

    public function getUserJson (){
        $user = User::get();
        $arr =array();
        foreach ($user as $k => $v){
            $arr[$v['id']]= $v['name'];
        }
        return json_encode($arr);
    }
}
