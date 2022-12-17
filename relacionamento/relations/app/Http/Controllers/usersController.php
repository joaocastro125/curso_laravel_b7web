<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
        $data=User::all();
        return $data;
    }
    public function findOne(Request $request){
        $user=User::find($request->id);
        $user['addresses']=$user->addresses;
        return $user; 
     }
     public function insert(Request $request){
   
         $dataInsert=$request->only(['name','email','password']);
         $user=User::create($dataInsert);

         return $user;
        
     }
}
