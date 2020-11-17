@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('apartments.update', $apartment->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="container">


  <div class="form-group">
    <label for="title">Titolo</label>
    <input name="title" type="text" style="width :300px;height:40px" class="form-control" id="title" aria-describedby="emailHelp" value="{{$apartment->title}}">
  </div>
  <div class="form-group">
    <label for="rooms">Camere</label>
    <input name="rooms" type="number" style="width :200px;height:40px" class="form-control" id="rooms" value="{{$apartment->rooms}}">
  </div>
  <div class="form-group">
    <label for="beds">Letti</label>
    <input name="beds" type="number" style="width :200px;height:40px" class="form-control" id="beds" value="{{$apartment->beds}}">
  </div>
  <div class="form-group">
    <label for="bathrooms">Bagni</label>
    <input name="bathrooms" type="number" style="width :200px;height:40px" class="form-control" id="bathrooms" value="{{$apartment->bathrooms}}">
  </div>
  <div class="form-group">
    <label for="square_meters">Dimensione</label>
    <input name="square_meters" type="number" style="width :200px;height:40px" class="form-control" id="square_meters" value="{{$apartment->square_meters}}">
  </div>
  <div class="form-group">
    <label for="description">Descrizione</label>
    <textarea name="description" style="width :600px;" class="form-control" id="description" rows="3">{{$apartment->description}}"</textarea>
  </div>
  <div class="form-group">
    <label for="latitude">Latitudine</label>
    <input name="latitude" type="number" style="width :200px;height:40px" class="form-control" id="latitude" value="{{$apartment->latitude}}">
  </div>
  <div class="form-group">
    <label for="longitude">Longitudine</label>
    <input name="longitude" type="number" style="width :200px;height:40px" class="form-control" id="longitude" value="{{$apartment->longitude}}">
  </div>
  <div class="form-group">
    <label for="image">Foto</label>
    <input name="image" type="file" class="form-control" id="image" name="img" accept="image/*">
  </div>
  <div class="form-group form-check">
    <label for="available">Disponibile?</label>
    <input name="available" type="checkbox" class="form-control" id="available" name="available">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
