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
            {!! Form::select('user_deliveryman_id', $users, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar pedido', ['class'=>'btn btn-primary']) !!}

            <a href="{{ route('admin.orders.index') }}", class="btn btn-primary">Voltar</a>
        </div>

        {!! Form::close() !!}
    </div>

@endsection