
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}" type="text/css">
</head>
<body>
    <div class="container">
        <div class="colmns">
            <div class="column">
                <h1 class="has-text-info title">Factura #00{{ $numero }}</h1>
                <p><strong>Fecha: </strong>{{ date("d/m/Y", strtotime($fecha)) }}</p>
                <p><strong>Status: </strong>{{ strtoupper($status) }}</p>
                <p><strong>Total: </strong>${{ $total }}.00</p>
                <hr>
                <div class="card">
                    <h3 class="title">Detalles de tu Envío</h3>
                    <p><strong>Correo: </strong>{{ $email }}</p>
                    <p><strong>Dirección: </strong>{{ $line1 }}</p>
                    <p><strong>Código Postal: </strong>{{ $postal_code }}</p>
                    <p><strong>Ciudad: </strong>{{ $city }}</p>
                    <p><strong>Estado y País: </strong>{{ $country_code }} {{ $state }}</p>
                </div>
                <hr>
                <h3 class="title">Productos</h3>
                @foreach ($productos as $product)
                    <p><strong>Categoría:</strong> {{ $product->category->title }}</p>
                    <p><strong>Producto:</strong> {{ $product->title }}</p>
                    <p><strong>Descripción:</strong> {{ $product->description }}</p>
                    <p><strong>Total:</strong> ${{ $product->pricing }}</p>
                    <br>
                @endforeach
                <p>
                <strong>&copy;2018 Tienda De Finanzas</strong> by <a href="https://www.alonsorodriguez.org/">Alonso Rodríguez</a>.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
