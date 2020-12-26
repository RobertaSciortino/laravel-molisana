@extends('layouts.app')

@section('title', 'La Molisana - Prodotto')

@section('content')
  <div class="product-details">
    <h1> Prodotto con parametro = {{$shape['titolo']}} </h1>
    <div class="product-image">
      <img src="{{$shape['src-h']}}" alt="{{$shape['titolo']}}">
      <img src="{{$shape['src-p']}}" alt="{{$shape['titolo']}}">
    </div>
  </div>
@endsection
