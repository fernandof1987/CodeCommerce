@extends('app')

@section('content')

    <div class="container">

        <h1>Upload Image</h1>



        {!! Form::open(['route'=>['products.images.store', $product->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}

        <!-- Category Form Input-->

        <div class="form-group">

            {!! Form::label('image', 'Images:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Upload Image', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection