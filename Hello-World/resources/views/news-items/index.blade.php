@extends('layouts.app')

@section('content')
    <header class = "jumbotron">
        <h1 class="modal-title float-left">News</h1>
        <a class="nav-link float-right" href="{{route('news.create')}}">Maak je eigen news-item aan</a>
    </header>

    <div class="container">
        @if($message = Session::get('Success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
    </div>
    @endif
    <div class="row">
        @foreach($newsItems as $newsItem)
            <div class="col-sm card border-0">
                <h2 class="card-title">{{$newsItem['title']}}</h2>
                <p class="card-text">{{$newsItem['description']}}</p>
                <img class="card-img" src="{{$newsItem['image']}}" alt="{{$newsItem['title']}}">
                <a class="btn btn-light" href="{{route('news.show', $newsItem['id'])}}">Lees hier meer</a>
            </div>
            @endforeach
    </div>
    @endsection
