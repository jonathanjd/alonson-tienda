@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <div class="columns">
        <div class="column">
            <h1 class="title">Dashboard</h1>
            <hr>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card has-background-info has-text-white">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="text-center"><i class="fas fa-user fa-6x"></i></p>
                            <h3 class="subtitle has-text-white text-center">Perfil</h3>
                            <a href="#" class="button is-white is-fullwidth"><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card has-background-link">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="text-center"><i class="fas fa-shopping-basket fa-6x has-text-white"></i></p>
                            <h3 class="subtitle has-text-white text-center">Mis Compras</h3>
                            <a href="{{ route('mis.compras') }}" class="button is-white is-fullwidth"><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card has-background-danger">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="text-center"><i class="fas fa-heart fa-6x has-text-white"></i></p>
                            <h3 class="subtitle has-text-white text-center">Me Gusta</h3>
                            <a href="#" class="button is-white is-fullwidth"><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card has-background-primary has-text-white">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="text-center"><i class="fas fa-shopping-cart fa-6x"></i></p>
                            <h3 class="subtitle has-text-white text-center">Comprar</h3>
                            <a href="#" class="button is-white is-fullwidth"><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


@include('ecommerce.include.footer')
@endsection
