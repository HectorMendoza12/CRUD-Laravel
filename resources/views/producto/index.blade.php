<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Lista de productos</h1>
    
    @if (session('mensaje'))
        <script>
            alert("{{ session('mensaje') }}");
        </script>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-success" onclick="location.href='producto/create'">Añadir producto</button>
    </div>

    <table class="table table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad en stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->nombre_producto}}</td>
                <td>{{ $producto->categoria}}</td>
                <td>{{ $producto->descripcion}}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->stock}}</td>
                <td>
                <a class="btn btn-warning" href="{{'/producto/'.$producto->id.'/edit'}}"> Editar </a>
                <form action="{{ url('/producto/'.$producto->id)}}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" class="d-inline btn btn-danger" onclick="return confirm('¿Deseas eliminar el producto {{$producto->nombre_producto}}?')" value="Eliminar"></input>
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
