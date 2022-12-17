<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function index(){
       $data=Address::all();
       return $data;
    }
    public function findOne(Request $request){
        $address=Address::find($request->id);
        $address['user']=$address->user;
        return $address;
     }

     public function insert(Request $request){
        $data=$request->all();
        $address=$request->only(['address']);
         $address=Address::create($data);
        return $address;
     }

}
