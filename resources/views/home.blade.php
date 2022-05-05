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
         @dd($trainsList)
         {{-- @foreach($trainsList as $train)
            <h1>{{ $train->company }}</h1>
         @endforeach --}}
      </main>
   </body>
   </html>
@endsection