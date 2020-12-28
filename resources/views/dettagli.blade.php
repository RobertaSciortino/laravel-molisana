@extends('layouts.app')

@section('title', 'La Molisana - Prodotto')

@section('content')
  <div class="product-details">
    <h1> {{$shape['titolo']}} </h1>

    <div class="product-image">
      <img src="{{$shape['src-h']}}" alt="{{$shape['titolo']}}">
      @if ($prev_id != null)
        <a class="prev" href="{{route('product_details', ['id' => $prev_id])}}">
          <div class="previous">
            <i class="fas fa-chevron-left fa-3x"></i>
          </div>
        </a>
      @endif
      <img src="{{$shape['src-p']}}" alt="{{$shape['titolo']}}">
      @if ($next_id != null)
        <a href="{{route('product_details', ['id' => $next_id])}}">
          <div class="next">
            <i class="fas fa-chevron-right fa-3x"></i>
          </div>
        </a>
      @endif
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
