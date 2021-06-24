@extends('layouts.main')

@section('content')

  @foreach ($travels as $travel )
    <div>
      <p>Destinazione: {{ $travel['destination'] }}</p>
      <p>Stato: {{ $travel['country'] }}</p>
      <p>Descrizione: {{ $travel['description'] }}</p>
    </div>  
  @endforeach
  


@endsection