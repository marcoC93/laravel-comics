@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as  $comic)
                <div class="col-md-3">
                    <div class="card">
                        <a href="https://developers.google.com/speed/libraries/">
                        <h2>{{$comic['title']}}</h2>
                        <img src="{{$comic['thumb']}}" alt="">
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


@endsection
