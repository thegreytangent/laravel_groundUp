@extends('layout')


@section('content')
  <h1>Customers</h1>

  <form action="customers" method="post">
    <div class="input-group">
      <input type="text" class="form-control" name="name" value="">
    </div>
    <button type="submit" name="button">Add Customers</button>
    @csrf
  </form>
  <ul>
    @foreach ($customers as $customer)
      <li>{{$customer->name}}</li>
    @endforeach
  </ul>
@endsection
