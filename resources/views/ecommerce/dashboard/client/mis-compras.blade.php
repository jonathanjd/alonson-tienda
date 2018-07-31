@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <div class="columns">
        <div class="column">
            <h1 class="title">Mis Compras</h1>
            <hr>
        </div>
    </div>

    <div class="colmns">
        <div class="column">
            <table class="table">
                <thead>
                    <tr>
                        <th>Factura</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>#00{{ $order->id }}</td>
                            <td>{{ date("d/m/Y", strtotime($order->created_at)) }}</td>
                            <td>{{ strtoupper($order->status) }}</td>
                            <td>${{ $order->total }}</td>
                            <td>
                                <a href="{{ route('compra', $order->car->customid) }}" class="button is-primary">Ver Factura</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  </div>
</div>


@include('ecommerce.include.footer')
@endsection
