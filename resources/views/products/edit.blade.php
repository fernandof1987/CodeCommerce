@extends('app')

@section('content')

    <div class="container">

        <h1>Edit Product: {{ $product->name }}</h1>


        {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured', 'Featured:') !!}
            {!! Form::text('featured', $product->featured, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('recommended', 'Recommended:') !!}
            {!! Form::text('recommended', $product->recommended, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection