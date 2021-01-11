@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $key => $comic)
                <div class="col-md-2">
                    <div class="card">
                        <a href="{{route('comic-page', ['id' => $key])}}">
                            <img src="{{$comic['thumb']}}" alt="">
                            <span>{{$comic['title']}}</span>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


@endsection
