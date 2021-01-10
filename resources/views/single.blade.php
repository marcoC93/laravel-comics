@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {{ $comic['title']}}</h1>
                <img src="{{$comic['thumb']}}" alt="">
                <p> {{$comic['description']}}</p>
                <ul>
                    @foreach ($comic['artists'] as $artist)
                    <li>
                        <a href="#">
                            {{$artist}}
                        </a>     
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
