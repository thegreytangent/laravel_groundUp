<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller

{
  public function index() {
    $customers = Customer::all();
    return view('customers.index', compact('customers'));
  }


  public function create() {
    $companies = Company::all();
    return view('customers.create',compact('companies'));
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
      'name' => 'required',
      'email' => 'required'
    ]);

    $customer->update($data);

      return redirect("customers");


  }


  public function store(Request $request)
  {

    $data = $request->validate([
      'name'    => 'required|min:3',
      'email'   => 'required|email',
      'active'  => 'required|integer',
      'company_id' => 'required'
    ]);

    Customer::create($data);

    return redirect("customers");
  }

}
