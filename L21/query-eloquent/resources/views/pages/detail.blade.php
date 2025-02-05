@extends( 'layouts.layout' )

@section('title',"Dettaglio pizza $pizza->gusto")

@section('content')

    <h1>Pizza {{$pizza->gusto}}</h1>

    <p>Prezzo: {{$pizza->prezzo}}€</p>

    <p>{{$pizza->active ? 'La pizza è disponibile' : 'La pizza non è disponibile'}}</p>

    <a href="{{route('home')}}" class="btn btn-primary">Torna alla home</a>
@endsection
