@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row">
        @foreach($users as $item)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{ $item->name }}</div>
                    </div>
                </div>
            </div>
        @endforeach

            <div class="row mx-auto mt-3">
                {{ $users->links() }}
            </div>
    </div>
@endsection
