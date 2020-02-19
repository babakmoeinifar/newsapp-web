@extends('layouts.app')

@section('content')
@include('partials.sessions')
    <div class="row">
        <form action="{{ route('save-category') }}" method="POST" class="form-group col mt-3 border py-3">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="color" class="form-control" id="color" name="color" placeholder="">
            </div>

            <button type="submit" class="btn btn-secondary">Save New Category</button>
        </form>
    </div>

    <div class="row">
        @foreach($categories as $item)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{ $item->title }}
                        <div style="background-color: {{ $item->color }}; width: 40px; height: 10px"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
