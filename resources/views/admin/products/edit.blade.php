@extends('app')

@section('content')

    <div class="container">
        <h3>Editando produto: {{ $product->nome }}</h3>

        @include('errors._check')

        {!! Form::model($product, ['route'=>['admin.products.update', $product->id], 'class'=>'form']) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Salvar produto', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection