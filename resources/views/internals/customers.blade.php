@extends('layout')


@section('content')


  <div class="container">

      <h1>Customers</h1>
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


    <button type="submit" name="button">Add Customers</button>
      @csrf
    </form>



      <ul>
        @foreach ($customers as $customer)
          <li>{{$customer->name}} / {{$customer->email}}</li>
        @endforeach
      </ul>
</div>

@endsection
