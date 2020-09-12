@extends('layout')
@section("title", "Create Customers")

@section('content')


<div class="container">
  <br>
  <hr>
  <div class="row">
    <div class="col-lg-12">

      {{$errors->first('name')}}
      {{$errors->first('email')}}

      <form method="POST" action="/customers">
        @include('customers.form')
        <button type="submit" class="btn btn-primary" name="button">Add Customers</button>
      </form>

    </div>
  </div>
  <hr>
</div>
