@extends('layouts.app')
@section("title", "Contact Us")
@section('content')
 


  @if (!session()->has('message'))
  <h1>Contact us  </h1>
  <form class="" method="POST" action="/contact">
    <div class="form-group">
      <label for="">Name</label>
      <input class="form-control" type="text" value="{{old('name')}}" name="name">
      <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input class="form-control" type="text" value="{{old('email')}}" name="email">
      <div>{{ $errors->first('email') }}</div>
    </div>

    <div class="form-group">
      <label for="">Message</label>
    <textarea class="form-control" name="message" rows="8" cols="80">{{old('message')}}</textarea>
      <div>{{ $errors->first('message') }}</div>
    </div>

    @csrf
    <button type="submit" name="button" class="btn btn-success">Submit</button>
    </form>
    @endif
@endsection
