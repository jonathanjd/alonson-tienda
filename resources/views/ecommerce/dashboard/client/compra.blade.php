@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <div class="columns">
        <div class="column">
            <h1 class="title">Mi Compra</h1>
            <hr>
        </div>
    </div>

    <div class="colmns">
        <div class="column">
            @if (Session::has('paymentSuccess'))
            <article class="message is-success">
                <div class="message-header">
                    <p><i class="fas fa-exclamation-triangle m-r-sm"></i>Compra <Completada></Completada></p>
                </div>
                <div class="message-body">
                   {{ Session::get('errorAuth') }}
                </div>
            </article>
            @endif

            <div class="box">
                <h3 class="title">Detalles de tu Envío</h3>
                <p><strong>Correo: </strong>{{ $order->email }}</p>
                <p><strong>Dirección: </strong>{{ $order->line1 }}</p>
                <p><strong>Código Postal: </strong>{{ $order->postal_code }}</p>
                <p><strong>Ciudad: </strong>{{ $order->city }}</p>
                <p><strong>Estado y País: </strong>{{ $order->country_code }} {{ $order->state }}</p>
            </div>
            <div class="box">
                <h3 class="title">Productos</h3>
                <hr>
                <div class="columns is-multiline">
                    @foreach ($car->products as $product)
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-image">
                              <figure class="image is-4by3">
                                <img src="{{ asset($product->image->path) }}" alt="Placeholder image">
                              </figure>
                            </div>
                            <div class="card-content">
                              <div class="content">
                                <p><strong>Categoría:</strong> {{ $product->category->title }}</p>
                                <p><strong>Producto:</strong> {{ $product->title }}</p>
                                <p><strong>Descripción:</strong> {{ $product->description }}</p>
                                <p><strong>Total:</strong> ${{ $product->pricing }}</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box">
                <h3 class="title">Factura</h3>
                <hr>
                <p><strong>Número: </strong>#00{{ $order->id }}</p>
                <p><strong>Fecha: </strong>{{ date("d/m/Y", strtotime($order->created_at)) }}</p>
                <p><strong>Status: </strong>{{ strtoupper($order->status) }}</p>
                <p><strong>Total: </strong>${{ $order->total }}.00</p>
                <a href="#" class="button is-info">Generar PDF</a>
            </div>
        </div>
    </div>
    <a href="{{ route('mis.compras') }}" class="button is-primary is-fullwidth">Regresar</a>
  </div>
</div>


@include('ecommerce.include.footer')
@endsection
