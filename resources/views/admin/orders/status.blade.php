@extends('app')

@section('content')

    <div class="container">
        <h3>Alterando status do pedido: {{ $order->id }}</h3>

        @include('errors._check')

        {!! Form::model($order, ['route'=>['admin.orders.update', $order->id], 'class'=>'form']) !!}

        @include('admin.orders._form')

        {!! Form::hidden('id', $order->id) !!}
        {!! Form::hidden('client_id', $order->client_id) !!}
        {!! Form::hidden('total', $order->total) !!}

        <div class="form-group">
            {!! Form::label('Statusa', 'Status: ') !!}
            {!! Form::select('status', ['Em andamento', 'Em processamento', 'Finalizado'], null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar pedido', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection