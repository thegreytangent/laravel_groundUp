@extends('layout')
@section("title", "Customer List")

@section('content')


  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <h1>Customer List</h1>
        {{$errors->first('name')}}
        {{$errors->first('email')}}

        <form method="POST" action="customers">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name">
          </div>


          <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="name">Status: </label>
            <select class="form-control" name="active">
              <option value="" disabled>Select customer status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary" name="button">Add Customers</button>
          @csrf
        </form>

      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <h3>Active Customers: </h3>
        <ul>
          @foreach ($activeCustomers as $customer)
            <li>{{$customer->name}} / {{$customer->email}}</li>
          @endforeach
        </ul>
        <h3>In-Active Customers: </h3>
        <ul>
          @foreach ($InActiveCustomers as $customer)
            <li>{{$customer->name}} / {{$customer->email}}</li>
          @endforeach
        </ul>


      </div>
    </div>





  </div>

@endsection
