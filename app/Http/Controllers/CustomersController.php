<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller {

    public function __construct()
    {
      $this->middleware('auth')->except(['index']);
      
    }


  public function index() {
    $customers = Customer::all();
    return view('customers.index', compact('customers'));
  }


  public function create() {
    $companies = Company::all();
    $customer = new Customer();
    return view('customers.create',compact('companies', 'customer'));
  }

  //route model binding
  public function show(Customer $customer) {
    $companies = Company::all();
    return view('customers.show',compact('companies', 'customer'));
  }


  public function edit(Customer $customer) {
    $companies = Company::all();
    return view('customers.edit',compact('companies', 'customer'));
  }

  public function update(Customer $customer) {

    $data = request()->validate([
      'name'  => 'required',
      'email' => 'required',
      'active' => 'required',
      'company_id' => 'required'
    ]);

    $customer->update($data);

    return redirect("customers");
  }


  public function destroy(Customer $customer) {
    $customer->delete();
    return redirect("customers");
  }


  public function store(Request $request)
  {
   $customer =  Customer::create($this->validateRequest($request));
   

    event(new NewCustomerHasRegisteredEvent($customer));


  
   

   

    // return redirect("customers");
  }

  private function validateRequest($req) {
    return $req->validate([
      'name'        => 'required|min:3',
      'email'       => 'required|email',
      'active'      => 'required|integer',
      'company_id'  => 'required'
    ]);
  }



}
