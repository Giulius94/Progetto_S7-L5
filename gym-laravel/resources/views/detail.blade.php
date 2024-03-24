@extends('layouts.layout')
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <h5 class="card-title">Nome Attività :{{$attivita->name}}</h5>
                                <p class="card-text">Descrizione attivita :{{$attivita->description}}</p>
                                <p class="card-text">Attivo nella nostra palestra dal : {{$attivita->created_at->format('Y-m-d')}}</p>
                                <a type="button" href="/attivita" class="btn btn-info">Back to Homepage</a>
      </div>
    </div>
  </div>
</div>
@endsection