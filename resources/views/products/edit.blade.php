@extends('app')

@section('content')

    <div class="container">

        <h1>Edit Product: {{ $product->name }}</h1>

        {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category_id', $categories, $product->category->id, ['class'=>'form-control']) !!}
        </div>

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

            <!-- Featured Form Input-->

            {!! Form::label('featured') !!}
            {!! Form::checkbox('featured', true, $product->featured, ['class'=>'checkbox-inline']) !!}

            <!-- Name Recommende Input-->

            {!! Form::label('recommended') !!}
            {!! Form::checkbox('recommended', true, $product->recommended, ['class'=>'checkbox-inline']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection