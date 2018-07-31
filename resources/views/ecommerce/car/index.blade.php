@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
        <li><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li class="is-active"><a href="#" aria-current="page">Carrito</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="section">
  <div class="container">
    <p class="title">Mi Carrito de Compras</p>
    <div class="columns">
      <div class="column is-6">
        <table class="table">
          <thead>
            <tr>
              <th>
              </th>
              <th>
                Producto
              </th>
              <th>
                Precio
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                  <td>
                    <figure class="image is-96x96">
                      <img src="{{ $product->image->path }}">
                    </figure>
                  </td>
                  <td>
                    {{ $product->title }}
                  </td>
                  <td>
                    ${{ $product->pricing }}
                  </td>
                  <td><a class="delete is-large has-background-danger"></a></td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <p class="subtitle"><strong>SubTotal: ${{ $total }}</strong></p>
        @if (Auth::guard('user-ecommerce')->check())
            <a href="{{ route('payment.send') }}" class="button is-large is-info is-fullwidth"><i class="fab fa-cc-paypal fa-2x"></i></a>
            @else

            <div class="columns is-multiline">
                <div class="column">
                    <a href="{{ route('login') }}">
                        <div class="card">
                            <div class="card-content">
                                <p><i class="fas fa-sign-in-alt"></i></p>
                                <h5>Login</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ route('register') }}">
                        <div class="card">
                            <div class="card-content">
                                <p><i class="far fa-user"></i></p>
                                <h5>Registrarse</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <a href="#" class="button is-large is-info is-fullwidth" disabled><i class="fab fa-cc-paypal fa-2x"></i></a>
        @endif
      </div>
    </div>
  </div>
</div>

@include('ecommerce.include.footer')
@endsection
