@extends('app')

@section('content')

    <div class="container">

        <h1>Create Product</h1>



        {!! Form::open(['route'=>'products.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured', 'Featured:') !!}
            {!! Form::text('featured', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('recommended', 'Recommended:') !!}
            {!! Form::text('recommended', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('Add Product', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection