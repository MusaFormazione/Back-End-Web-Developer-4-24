@extends( 'layouts.layout' )

@section('title',"Modifica pizza $pizza->gusto")

@section('content')
    <h1>Modifica pizza {{$pizza->gusto,}}</h1>

    <form action="{{route('update-pizza', $pizza->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="gusto">Gusto</label>
        <input type="text" id="gusto" value="{{$pizza->gusto}}" name="gusto" class="form-control">

        <label for="prezzo">Prezzo</label>
        <input type="number" id="prezzo" value="{{$pizza->prezzo}}" name="prezzo" class="form-control">

        <label for="active">Attivo?</label>
        <select name="active" id="active" class="form-control">
            <option {{$pizza->active === 1 ? 'selected' : ''}} value="1">Si</option>
            <option {{$pizza->active === 0 ? 'selected' : ''}} value="0">No</option>
        </select>

        <button class="btn btn-primary mt-3">Salva</button>
    </form>

    <a class="btn btn-warning" href="{{route('home')}}"><< Torna alla home</a>

@endsection
