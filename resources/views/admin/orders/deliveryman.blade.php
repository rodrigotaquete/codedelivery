@extends('app')

@section('content')

    <div class="container">
        <h3>Alterando entregador do pedido: {{ $order->id }}</h3>

        @include('errors._check')

        {!! Form::model($order, ['route'=>['admin.orders.update', $order->id], 'class'=>'form']) !!}

        @include('admin.orders._form')

        {!! Form::hidden('id', $order->id) !!}
        {!! Form::hidden('client_id', $order->client_id) !!}
        {!! Form::hidden('total', $order->total) !!}
        {!! Form::hidden('status', $order->status) !!}

        <div class="form-group">
            {!! Form::label('DeliveryMan', 'Entregador: ') !!}
            {!! Form::select('deliveryman', $users, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar pedido', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection