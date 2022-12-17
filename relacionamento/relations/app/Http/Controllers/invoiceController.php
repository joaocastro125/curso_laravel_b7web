<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index(){
        $invoice=Invoice::all();
        return $invoice;
    }
    public function createInvoice(Request $request){
        $dataInsert=$request->only(['value','description','user_id','address_id']);
        $invoice=Invoice::create($dataInsert);
        return $invoice;
       

    }

   
}
