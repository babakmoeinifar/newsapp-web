@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row">
        @foreach($posts as $item)
            <div class="col-md-4 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('show-post', $item->id) }}"><h5 class="card-title">{{ $item->title }}</h5></a>
                    </div>
                </div>
            </div>
        @endforeach

            <div class="row mx-auto mt-3">
                {{ $posts->links() }}
            </div>
    </div>
@endsection
