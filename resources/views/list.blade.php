@extends('layouts.app')

@section('title', "Movie List")

@section('content')
 <div class="container">
    <div class="row row-cols-5 g-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Title:</strong> {{$movie->title}}</h5>
                        @if($movie->title != $movie->original_title)
                        <h5 class="card-title"><strong>Original title:</strong> {{$movie->original_title}}</h5>
                        @endif                      
                        <h6 class="card-subtitle mb-2"><strong>Nationality: </strong>{{$movie->nationality}}</h6>
                        <p class="card-text"><strong>Date:</strong> {{$movie->date}}</p>
                        <p class="card-text"><strong>Vote:</strong> {{$movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
 </div>
@endsection
