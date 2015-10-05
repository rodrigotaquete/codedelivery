@extends('app')

@section('content')

    <div class="container">
        <h3>Detalhes do pedido: {{ $order->id }}</h3>

        @include('admin.orders._form')

        {!! Form::label('Status', 'Status: '.$status) !!}

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Valor Total</th>
            </tr>
            </thead>

            <tbody>

            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->qtd }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ ($item->qtd * $item->price) }}</td>
                </tr>
            @endforeach
        </table>

        <div class="form-group">
            <a href="{{ route('admin.orders.index') }}", class="btn btn-primary">Voltar</a>
        </div>
    </div>

@endsection