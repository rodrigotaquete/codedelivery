@extends('app')

@section('content')

    <div class="container">
        <h3>Pedidos</h3>

        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Total</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->client->user->name }}</td>
                    <td>{{ $order->client->phone }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('admin.orders.details', ['id'=>$order->id]) }}", class="btn btn-default btn-sm">Detalhes</a>
                        <a href="{{ route('admin.orders.status', ['id'=>$order->id]) }}", class="btn btn-default btn-sm">Status</a>
                        <a href="{{ route('admin.orders.deliveryman', ['id'=>$order->id]) }}", class="btn btn-default btn-sm">Entregador</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $orders->render() !!}
    </div>
@endsection