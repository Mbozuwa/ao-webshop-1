@extends('layouts.app')
  @section('content')
    <h3>Hallo</h3>
    @foreach ($cat_prd as $cat)
        <h3> This is {{$cat->name}}</h3>
    @endforeach
@endsection