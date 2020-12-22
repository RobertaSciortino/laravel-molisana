@extends('layouts.app')

@section('title', 'La Molisana - Prodotti')

@section('content')
  <section>
    <div class="title-section">
      <h1>
        le lunghe
      </h1>
    </div>

    <div class="card-container-long">
      @foreach ($pasta_shapes as $shape)
          {{-- seleziono solo le card del formato "lunga" --}}
          @if ($shape["tipo"] == "lunga")
            <div class="card">
              <img src="{{$shape["src"]}}" alt="{{$shape["titolo"]}}">
              <div class="overlay">
                <a href="#">
                  {{$shape["titolo"]}}
                </a>
              </div>
            </div>
          @endif
      @endforeach
    </div>
  </section>

  <section>
    <div class="title-section">
      <h1>
        le corte
      </h1>
    </div>

    <div class="card-container-short">
      @foreach ($pasta_shapes as $shape)
          {{-- seleziono solo le card del formato "corta" --}}
          @if ($shape["tipo"] == "corta")
            <div class="card">
              <img src="{{$shape["src"]}}" alt="{{$shape["titolo"]}}">
            </div>
          @endif
      @endforeach
    </div>
  </section>

  <section>
    <div class="title-section">
      <h1>
        le cortissime
      </h1>
    </div>

    <div class="card-container-xshort">
      @foreach ($pasta_shapes as $shape)
          {{-- stampo solo le card del formato "cortissima" --}}
          @if ($shape["tipo"] == "cortissima")
            <div class="card">
              <img src="{{$shape["src"]}}" alt="{{$shape["titolo"]}}">
            </div>
          @endif
      @endforeach
    </div>
  </section>




@endsection
