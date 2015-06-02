@if ($errors->any())

    <ul class="alert bg-warning">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif