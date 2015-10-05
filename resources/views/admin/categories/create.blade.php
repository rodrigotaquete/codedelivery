@extends('app')

@section('content')

    <div class="container">
        <h3>Nova categorias</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.categories.store', 'class'=>'form']) !!}

        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Criar categoria', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection