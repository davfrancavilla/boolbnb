@extends('layouts.app')
@section('content')

<h3>Bentornato,visualizza i tuoi appartamenti</h3>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@foreach ($apartments as $apartment)



    <ul>

        <li><a href="{{route('apartments.show',$apartment->id)}}">{{$apartment->title}}</a></li>
        <li>{{$apartment->rooms}} stanze in questo appartamento</li>
        <li><a href="{{route('apartments.edit',$apartment->id)}}">Modifica i dati del tuo appartamento</a></li>

        <li>
            <form action="{{route('apartments.destroy',$apartment->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina</button>
            </form>
        </li>

    </ul>

@endforeach
@endsection
