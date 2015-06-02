@extends('app')

@section('content')

    <div class="container">

        @if ($errors->any())

            <ul class="alert bg-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif

        <h1>Create Product</h1>

        {!! Form::open(['route'=>'products.store']) !!}

        <!-- Category Form Input-->

        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
        </div>

        <!-- Name Form Input-->

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Description Form Input-->

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Price Form Input-->

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

        <!-- Featured Form Input-->

            {!! Form::label('featured') !!}
            {!! Form::checkbox('featured', true, false, ['class'=>'checkbox-inline']) !!}

        <!-- Name Recommende Input-->

            {!! Form::label('recommended') !!}
            {!! Form::checkbox('recommended', true, false, ['class'=>'checkbox-inline']) !!}

        </div>

        <!-- Submit Form -->

        <div class="form-group">

            <a href="{{ route('products') }}" class="btn btn-default">Back</a>
            {!! Form::submit('Add Product', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>


@endsection