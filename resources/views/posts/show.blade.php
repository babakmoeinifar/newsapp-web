@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row">
            <div class="col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
    </div>
@endsection
