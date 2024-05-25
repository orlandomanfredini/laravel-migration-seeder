<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
<main>
    <section>
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
    </section>
</main>
</body>
</html>