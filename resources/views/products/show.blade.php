@extends('layouts.app')
  @section('content')
      <a href="/products" class=" btn-default ">Go Back</a>
      <h3>{{$product->name}}</h3>
      <h3>{{$product->description}}</h3>
      <h3>€{{$product->price}}</h3>
      <br><br>
  <hr>
  </hr>
  <hr>
@endsection
