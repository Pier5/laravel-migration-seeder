@extends('guest.template.base')

@section('title', 'Train timetables')

@section('content')
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Train timetables</title>
   </head>
   <body>
      <main>
         <h1>Informazioni sui prossimi treni in partenza:</h1>
         <ul>
            @foreach($trainsList as $train)
            <div class="trainCard">
                  <li>Nome compagnia: {{ $train->company }}</li>
                  <li>Partenza da: {{ $train->departure_station }}</li>
                  <li>Arrivo a:{{ $train->arrival_station }}</li>
                  <li>Orario partenza: {{ $train->departure_time }}</li>
                  <li>Orario d'arrivo: {{ $train->arrival_time }}</li>
               </div>
            @endforeach
         </ul>
      </main>
   </body>
   </html>
@endsection