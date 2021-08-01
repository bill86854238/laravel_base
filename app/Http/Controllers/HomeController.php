<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use OpenApi\Annotations;

class HomeController extends Controller
{
    /**
     * @OA\Info(title="My First API", version="0.1")
     */

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



    /**
     * @OA\Get(
     *     path="/api/getUserJson",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */

    public function getUserJson (){
        $user = User::get();
        $arr =array();
        foreach ($user as $k => $v){
            $arr[$v['id']]= $v['name'];
        }
        return json_encode($arr);
    }

    public function getUserJsonById ($id){
        $user = User::where('id',$id)->get();
        $arr =array();
        foreach ($user as $k => $v){
            $arr[$v['id']]= $v['name'];
        }
        return json_encode($arr);
    }

    public function getUserJsonByIdV2 (Request $request){
        $id = $request->input('id');
        $user = User::where('id',$id)->get();
        $arr =array();
        foreach ($user as $k => $v){
            $arr[$v['id']]= $v['name'];
        }
        return json_encode($arr);
    }
}
