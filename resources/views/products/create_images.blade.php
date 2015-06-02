@extends('app')

@section('content')

    <div class="container">

        <h1>Upload Image</h1>

        @if ($errors->any())

            <ul class="alert bg-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif

        {!! Form::open(['route'=>['products.images.store', $product->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}

        <!-- Category Form Input-->

        <div class="form-group">

            {!! Form::label('image', 'Images:') !!}
            {!! Form::file('image', null, ['class'=>'form-control'], 'required') !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Upload Image', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection