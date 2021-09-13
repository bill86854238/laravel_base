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


    public function bootstrapTable(){

        $data =array();
        return view ('bootstrapTable',$data);
    }

    public function dataTable(){

        $data =array();
        return view ('dataTable',$data);
    }

    public function bootstrapTableJson(){
        for ($i = $_GET['offset']; $i < $_GET['offset'] + $_GET['limit']; $i++) {
            $c[]=array('id'=>$i+1,'name'=>'Item 799','price'=>'$799');
        }

        $e = array('total'=>800,'totalNotFiltered'=>800,'rows'=>$c);

        return response()->json($e);
    }


    public function dataTableJson(Request $request){
        $start = $request->start;
        $length = $request->length;
        $draw = $request->draw;
        $search = $request->search['value'];

        for ($i = $start; $i < $start + $length; $i++) {
            $c[]=array("Firstname"=>"Airi".$i,
                "Lastname"=>"Satou",
                "Position"=>"Accountant",
                "Office"=>$search,
                "Startdate"=>"28th Nov 08",
                "Salary"=>"$162,700");


//            $c[]=array("Airi".$i,
//                "Satou",
//                "Accountant",
//                $search,
//                "28th Nov 08",
//                "$162,700");
        }

        $e = array('draw'=>$draw,'recordsTotal'=>5700,'recordsFiltered'=>5700,'data'=>$c);

        return response()->json($e);
    }
}


