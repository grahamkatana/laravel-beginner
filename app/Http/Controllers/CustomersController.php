<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{

  //  public function __construct(){
  //      $this->middleware('auth')->except(['index']);
   // }
    //instaed of using list the method is called index
    public function index(){
        // $activeCustomer=Customer::where('active',1)->get();
       //  $activeCustomer=Customer::active()->get();
         //$inactiveCustomer=Customer::where('active',0)->get();
       //  $inactiveCustomer=Customer::inactive()->get();
       //  $companies = Company::all();
        //dd($activeCustomer);
       // $customers = Customer::all();
       /* dd($activeCustomers);// dial and dumb
       $customers =[
           'Juliet Katana',
           'Kenneth Katana',
           'Linda Katana',
           'Lisa Katana'
       ];
      
       return view('internals.customers',[
           'activeCustomer'=>$activeCustomer,
           'inactiveCustomer'=>$inactiveCustomer,
           ]);*/
           $customers = Customer::all();
            return view('customers.index', compact('customers'));

     //  return view('internals.customers',['activeCustomer'=>$customers],);
       
    }

    public function create(){
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create', compact('companies','customer'));
    }

    public function store(){

      // dd(request('name'));      
      /*  $customer = new Customer();
        $customer->name=request('name');
        $customer->email=request('email');
        $customer->active=request('active');
        $customer->save();*/
        $customer = Customer::create($this->validateRequest());
        $this->storeImage($customer);
         return redirect('customers');
      }
      //below is route model binding
      public function show(Customer $customer){
       // $customer=Customer::find($customer);
       // $customer=Customer::where('id',$customer)->firstOrFail();
       // dd($customer);
       return view('customers.show',compact('customer'));
      }

      public function edit(Customer $customer){
        $companies = Company::all();
          return view('customers.edit',compact('customer','companies'));

      }

      public function update(Customer $customer){
       
        $customer->update($this->validateRequest());
        $this->storeImage($customer);
          return redirect('customers/'.$customer->id);
      }
      public function destroy(Customer $customer){
          $customer->delete();
          return redirect('customers');
      }

      private function validateRequest(){
       return tap(request()->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'active'=>'required',
        'company_id'=>'required',
        ]),function(){

            if (request()->hasFile('image')){
                request()->validate([
                    'image'=>'file|image|max:5000',
                ]);
            }
        }

       );
      }

      private function storeImage($customer){
        if (request()->has('image')){
            $customer->update([
                'image'=>request()->image->store('uploads','public'),
            ]);
        }
      }
}
