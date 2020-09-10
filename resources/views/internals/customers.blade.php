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


        <button type="submit" class="btn btn-primary" name="button">Add Customers</button>
          @csrf
        </form>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
          <ul>
            @foreach ($customers as $customer)
              <li>{{$customer->name}} / {{$customer->email}}</li>
            @endforeach
          </ul>
        </div>
    </div>





</div>

@endsection
