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

        @include('customers.form')


    </div>
  </div>
  <hr>
</div>
