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
        $data= DB::select("select * from form");
        return view('formData',["userData"=>$data]);
    }
}
