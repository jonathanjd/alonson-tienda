@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
        <li><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li class="is-active"><a href="#" aria-current="page">{{ $category->title }}</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="section">
  <div class="container">
    <p class="title">{{ $category->title }}</p>
    <div class="columns is-multiline">
      @foreach ($category->products as $product)
        <div class="column is-4">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="{{ $product->image->path }}" alt="{{ $product->image->alt }}">
              </figure>
            </div>
            <div class="card-content">
              <p class="is-size-5">
                “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
              </p>
              <p class="is-size-4">
                ${{ $product->pricing }}
              </p>
              <div class="columns">
                <div class="column">
                  <a href="#" class="button is-info is-fullwidth">Detalles</a>
                </div>
                <div class="column">
                  @include('ecommerce.include.form', ['product', $product])
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>



@include('ecommerce.include.footer')
@endsection