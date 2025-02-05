@extends( 'layouts.layout' )

@section('title','Home')

@section('content')
    <h1>Home</h1>


    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <table class="table">

        <thead>
            <tr>
                <th>#</th>
                <th>Gusto</th>
                <th>Prezzo</th>
                <th>Attivo?</th>
                <th>Azioni</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($pizze as $pizza)
            <tr>
                <td>{{$pizza->id}}</td>
                <td>{{$pizza->gusto}}</td>
                <td>{{$pizza->prezzo}}</td>
                <td>{{$pizza->active}}</td>
                <td>
                    <a href="{{route('show-pizza', $pizza->id)}}" class="btn btn-info">Dettagli</a>
                    <a href="{{route('edit-pizza', $pizza->id)}}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('destroy-pizza', $pizza->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @empty

            <tr>
                <td colspan="5">Non ci sono pizze</td>
            </tr>

            @endforelse
        </tbody>

    </table>

@endsection
