<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1> Agregar producto </h1>

<form action="{{ url('/producto')}}" method="post">
    @csrf
    <div class="form group">
    <label for="nombre_producto"> Nombre </label>
    <input type="text" name="nombre_producto" id="nombre_producto">
    <br>
    </div>

    <div class="form group">
    <label for="categoria"> Categoría </label>
    <input type="text" name="categoria" id="categoria">
    <br>
    </div>
        
    <div class="form group">
    <label for="descripcion"> Descripción </label>
    <input type="text" name="descripcion" id="descripcion">
    <br>
    </div>

    <div class="form group">
    <label for="precio"> Precio </label>
    <input type="number" name="precio" id="precio">
    <br>
    </div>

    <div class="form group">
    <label for="stock"> Cantidad en stock </label>
    <input type="number" name="stock" id="stock">
    <br>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Agregar producto">
    <br>

</form>