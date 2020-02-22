@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row">
        <div class="col-md-8 mt-2 mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-2 mb-2">
            @foreach($images as $item)
                <img src="{{ asset($item->url) }}" class="img-thumbnail" alt="post">
            @endforeach

            @foreach($videos as $item)
                <img src="{{ $item->url }}" class="img-thumbnail" alt="post">
            @endforeach
        </div>
    </div>
@endsection
