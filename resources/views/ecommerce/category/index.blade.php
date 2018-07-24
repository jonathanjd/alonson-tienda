@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])


<div class="section">
  <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
        <li class="is-active"><a href="#" aria-current="page">Categorías</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="columns is-multiline">
      @foreach ($categories as $category)
        <div class="column is-4">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="{{ $category->image->path }}" alt="{{ $category->image->alt }}">
              </figure>
            </div>
            <div class="card-content has-background-primary">
            <div class="content media">
              <a href="{{ route('categories.show', $category->slug) }}" class="has-text-white text-center media-content is-size-3">{{ $category->title }}</a>
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