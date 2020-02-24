@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach($comments as $item)
            <div class="col-md-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{ $item->author->name }}</div>
                        <div class="card-text" style="height: 60px">{{ $item->content }}</div>
                        <hr>
                        <a href="{{ $item->post->link() }}" class="btn btn-primary btn-sm">Go to Post</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row mx-auto mt-3">
            {{ $comments->links() }}
        </div>
    </div>
@endsection
