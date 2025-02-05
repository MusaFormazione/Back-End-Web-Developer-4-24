@extends( 'layouts.layout' )

@section('title','Crea pizza')

@section('content')

    <h1>Crea una nuova pizza</h1>

    <form action="{{route('store-pizza')}}" method="POST">
        @csrf
        <label for="gusto">Gusto</label>
        <input type="text" id="gusto" value="{{old('gusto')}}" name="gusto" class="form-control">
        @error('gusto')
        <p class="alert alert-warning">{{$message}}</p>
        @enderror

        <label for="prezzo">Prezzo</label>
        <input type="number" id="prezzo" value="{{old('prezzo')}}" name="prezzo" class="form-control">
        @error('prezzo')
        <p class="alert alert-warning">{{$message}}</p>
        @enderror

        <label for="active">Attivo?</label>
        <select name="active" id="active" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        @error('active')
        <p class="alert alert-warning">{{$message}}</p>
        @enderror

        <button class="btn btn-primary mt-3">Salva</button>
    </form>

@endsection
