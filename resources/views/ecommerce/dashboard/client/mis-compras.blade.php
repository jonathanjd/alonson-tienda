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
                    <tr>
                        <td>#0001</td>
                        <td>02-12-2018</td>
                        <td>Creado</td>
                        <td>$100.00</td>
                        <td>
                            <a href="{{ route('compra', 1) }}" class="button is-primary">Ver</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#0001</td>
                        <td>02-12-2018</td>
                        <td>Creado</td>
                        <td>$100.00</td>
                        <td>
                            <a href="{{ route('compra', 1) }}" class="button is-primary">Ver</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#0001</td>
                        <td>02-12-2018</td>
                        <td>Creado</td>
                        <td>$100.00</td>
                        <td>
                            <a href="{{ route('compra', 1) }}" class="button is-primary">Ver</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  </div>
</div>


@include('ecommerce.include.footer')
@endsection
