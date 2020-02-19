@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row">
        <form action="{{ route('save-tag') }}" method="POST" class="form-group col mt-3 border py-3">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="">
            </div>

            <button type="submit" class="btn btn-secondary">Save New Tag</button>
        </form>
    </div>

    <div class="row">
        @foreach($tags as $item)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{ $item->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
