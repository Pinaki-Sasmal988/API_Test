<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getData(){
        $data=User::all();
        return $data;
    }
    function sendData(Request $req){
        $data=new User;
        $data->name=$req->name;
        $data->email=$req->email;
        $result=$data->save();
        if($result){
            return ("result done");
        }
        else{
            return ("result failed");
        }
    }
    function Delete($id){
        $data=User::find($id);
        $data->delete();
    }
}
