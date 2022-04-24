<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test1 extends Controller
{

  public function names(){
    $cust = [
        'a smith',
        'b Jane',
        'c mat',
        'd jake'
    ];
  $customers = Customer::all();
  //  dd(cust);
    return view('internals.customers',['customers'=>$customers,]);
  }

  public function store(){

    dd(request('name'));
      //$data = request()->validate(['name'=>'required']);
     // $customer = new Customer();
     // $customer->name=request('name');
     // $customer->save();
     // return back();
  }
}
