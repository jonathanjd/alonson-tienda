@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
        <li><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li><a href="{{ route('categories.show', $product->category->slug) }}">{{ $product->category->title }}</a></li>
        <li class="is-active"><a href="#" aria-current="page">{{ $product->title }}</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-5">
        <div class="box">
          <figure class="image is-square">
            <img src="{{ $product->image->path }}" alt="Placeholder image">
          </figure>
        </div>
      </div>
      <div class="column is-5">
        <h1 class="title">{{ $product->title }}</h1>
        <p class="subtitle">{{ $product->description }}</p>
        <p class="m-b-md"><strong>Precio:</strong> ${{ $product->pricing }}</p>
        @include('ecommerce.include.form', ['product', $product])
      </div>
    </div>
  </div>
</div>


@include('ecommerce.include.footer')
@endsection