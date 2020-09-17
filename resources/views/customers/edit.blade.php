@extends('layouts.app')
@section("title", "Edit details for {{$customer->name}}")

@section('content')

  <div class="container">
    <br>
    <hr>
    <div class="row">
      <div class="col-lg-12">

        {{$errors->first('name')}}
        {{$errors->first('email')}}

        <form method="POST" action="/customers/{{$customer->id}}">
          @method('PUT');
          @include('customers.form',['customer' => $customer])
          <button type="submit" class="btn btn-primary" name="button">Update</button>
        </form>

      </div>
    </div>
    <hr>
  </div>
