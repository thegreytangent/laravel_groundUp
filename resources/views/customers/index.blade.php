@extends('layout')
@section("title", "Customer List")

@section('content')


  <div class="container">
    <p>
      <a href="customers/create">Create customers</a>
    </p>


    @foreach ($customers as $customer)
      <div class="row" style="padding:1%">
        <div class="col-1">
          {{ $customer->id }}
        </div>
        <div class="col-2">
          <a href="customers/{{$customer->id}}/edit">{{ $customer->name }}</a>
        </div>
        <div class="col-4">
          {{ $customer->company->name }}
        </div>
        <div class="col-2">
          {{ $customer->active}}
        </div>
        <div class="col-2">
          <form action="/customers/{{$customer->id}}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-sm btn-danger" type="submit" name="delete">Delete</button>
          </form>

        </div>
      </div>

    @endforeach





  </div>

@endsection
