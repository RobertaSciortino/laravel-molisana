@extends('layouts.app')

@section('title', 'La Molisana - Prodotto')

@section('content')
  <div class="product-details">
    <h1> {{$shape['titolo']}} </h1>
    <div class="product-image">
      <img src="{{$shape['src-h']}}" alt="{{$shape['titolo']}}">
      <img src="{{$shape['src-p']}}" alt="{{$shape['titolo']}}">
    </div>
    <div class="caption">
      <div class="container">
        <p>
          {!!$shape['descrizione']!!}
        </p>
        <div class="shape-info">
          <p>
            <i class="far fa-clock"></i>
            Tempi di cottura: {{$shape['cottura']}}
          </p>
          <p>
            <i class="fas fa-balance-scale"></i>
            Peso confezione: {{$shape['peso']}}
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
