<form action="{{ route('in_cars.store') }}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="product_id" value="{{ $product->id }}">

  <button type="submit" class="button is-success is-fullwidth">Agregar al Carrito</button>
</form>