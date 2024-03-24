@extends('layouts.layout')
    @section('title', 'Attività')
    @section('content')
    
        @foreach($attivita as $key => $value)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg" class="card-img-top h-100" alt="...">
                    </div>          
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nome Attività :{{$value->name}}</h5>
                                <p class="card-text">Descrizione attivita :{{$value->description}}</p>
                                <p class="card-text">Attivo nella nostra palestra dal : {{$value->created_at->format('Y-m-d')}}</p></p>

                                @foreach($value->oraris->sortBy('orario_inizio')->take(1) as $orariItem)
                                    <p class="card-text">Orari dal Lunedì al Venerdì: {{ $orariItem->orario_inizio }} - {{ $orariItem->orario_fine }}</p>
                                @endforeach

                                {{--@foreach ($value->prenotazionis as $prenotazioni)
                                <p class="card-text">Prenotazioni : {{$prenotazioni->id}}</p>
                                @endforeach--}}

                                {{--@foreach ($value->users as $user)
                                <p class="card-text">Iscritti prenotati : {{$user->name}}</p>
                            
                                @endforeach--}}
                                <a type="button" href="" class="btn btn-info">Prenota</a>
                                <a type="button" href="/attivita/{{$value->id}}" class="btn btn-info">Dettaglio</a>
                            </div>
                        </div>  
                </div>
            </div>
        @endforeach
    @endsection

  