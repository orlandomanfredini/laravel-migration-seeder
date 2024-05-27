@extends('layout')

@section('content')
    <div class="container">
            <ul class="row mt-5">
                @foreach ($trains as $train )
                <div class="col-3 mt-5">
                    <h5><strong class="text-danger">Azienda:</strong>{{$train->company}}</h5>
                    <p><strong class="text-primary" >Partenza:</strong>{{$train->departure}}</p>
                    <p><strong class="text-primary" >Arrivo:</strong>{{$train->arrival}}</p>
                    <p><strong class="text-primary" >Code:</strong>{{$train->code_transport}}</p>
                    <p><strong class="text-primary" >Orario Partenza:</strong>{{$train->departure_time}}</p>
                    <p><strong class="text-primary" >Orario Arrivo:</strong>{{$train->arrival_time}}</p>
                    <p><strong class="text-primary" >N carrozze:</strong>{{$train->carriage}}</p>
                </div>
                @endforeach
            </ul>
        </div>
    @endsection
