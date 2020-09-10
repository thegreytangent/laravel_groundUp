<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller

{
  public function list() {
    $activeCustomers = Customer::where('active', 1)->get();
    $InActiveCustomers = Customer::where('active', 0)->get();

    return view('internals.customers', compact('activeCustomers', 'InActiveCustomers'));
  }

  public function store(Request $request)
  {

    $data = $request->validate([
      'name' => 'required|min:3',
      'email' => 'required|email',
      'active' => 'required|integer'
    ]);



    $customer = new Customer();
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->active = $request->active;
    $customer->save();
    return back();
  }

}
