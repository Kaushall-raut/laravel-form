<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserData;
class Form extends Controller
{
    //
    function data(Request $req ){
// return $req->input();
$Data=new UserData();
$Data->Fname=$req->Fname;
$Data->Lname=$req->Lname;
$Data->address=$req->address;
$Data->email=$req->email;
$Data->save();
}
function view(){
        $data= DB::select("select * from form");
        return view('formData',["userData"=>$data]);

    }

    function delete($id){
       $deleteData=UserData::destroy($id);
       if($deleteData){
        echo "data deleted";
        // return view('form',["userdata"=>$data]);
        //    return redirect('form');

       }
        // return view('/form');
    }
    function update($id){
        $dataa=UserData::find($id);
        return view('update',['data'=>$dataa]);
    }
    function updateData(Request $req,$id){
// return $req;
$dataa=UserData::find($id);
$dataa->Fname=$req->Fname;
$dataa->Lname=$req->Lname;
$dataa->address=$req->address;
$dataa->email=$req->email;
if($dataa->save()){
echo "updated";
}
    }
}

