@extends('store.store')

@section('content')

    @section('categories')
        @include('store.partial.categories')
    @stop

    <div class="col-sm-9 padding-right">

        @if (isset($cart) and $cart == 'empty')
            <h3>Carrinho de compras vazio.</h3>
        @else
            <h3>Pedido realizado com sucesso!</h3>

            <p>O Pedido #{{ $order->id }}, foi realizado com sucesso.</p>
        @endif
    </div>


@stop