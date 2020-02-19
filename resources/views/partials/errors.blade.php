@if($errors->any())
    <div class="alert alert-danger mt-3" style="font-size: 16px;">
        <ul style="list-style-type: none;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif