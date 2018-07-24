@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])

<section class="section">
  <div class="container">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Buscar Productos</p>
          <div class="content">
            <div class="field has-addons">
              <div class="control">
                <input class="input" type="text" placeholder="Encontrar Productos">
              </div>
              <div class="control">
                <a class="button is-info">
                  Buscar
                </a>
              </div>
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-8">
        <article class="tile is-child box">
          <p class="title">Main column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum
              ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="columns">

      <div class="column">
        <h3 class="is-size-2 has-text-dark">COMPRAR</h3>
      </div>
      <div class="column">
        <a href="{{ route('categories.index') }}" class="text-right is-size-2">Categorías
          <i class="fas fa-chevron-right"></i>
        </a>
      </div>

    </div>

    <div class="columns">
      <div class="column">

        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="{{ asset('img/book.jpg') }}" alt="">
            </figure>
          </div>
          <div class="card-content has-background-primary">
            <div class="content media">
              <a href="#" class="has-text-white text-center media-content is-size-3">DVD</a>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="{{ asset('img/dvd.jpeg') }}" alt="">
            </figure>
          </div>
          <div class="card-content has-background-primary">
            <div class="content media">
              <a href="#" class="has-text-white text-center media-content is-size-3">BOOK</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('ecommerce.include.footer')
@endsection