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
          {{ $category->title }}
        </div>
      @endforeach
    </div>
  </div>
</div>



@include('ecommerce.include.footer')
@endsection