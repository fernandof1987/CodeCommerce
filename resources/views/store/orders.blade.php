@extends('store.store')

@section('content')


    <div class="col-sm-12 padding-right">

        <h3>Meus pedidos</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>#ID</td>
                    <td>Itens</td>
                    <td>Valor</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>

            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <ul>
                            @foreach($order->items as $item)
                                <li>{{ $item->product->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
            </tbody>


        </table>
    </div>


@stop