@extends('layouts.app')

@section('content')
    @include('partials.sessions')
    <div class="row mt-4">
        <div class="col-md-12 mt-2 mb-2">
            <h1>Add New Post</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('save-post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Category">Category:</label>
                            <select type="text" class="form-control" id="Category" name="category_id" required>
                                <option selected disabled>Select Category</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Tags">Tags:</label>
                            <select type="text" class="form-control" id="Tags" name="tags[]" multiple required>
                                <option selected disabled>Select Tags</option>
                                @foreach($tags as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Images">:</label>
                            <input type="file" class="form-control" id="Images" name="images[]" multiple required>
                        </div>

                        <button type="submit" class="btn btn-secondary">Save New Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
