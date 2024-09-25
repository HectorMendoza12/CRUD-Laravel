<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h1> Editar producto </h1>

<form action="{{ url('/producto/'.$producto->id)}}" method="post">
    @csrf
    {{ method_field('PATCH')}}
    <div class="mb-3">
        <label for="nombre_producto" class="form-label"> Nombre </label>
        <input type="text" name="nombre_producto" class="form-control col-md-6" value="{{ $producto->nombre_producto }}" id="nombre_producto">
    </div>
    
    <div class="mb-3">
        <label for="categoria" class="form-label"> Categoría </label>
        <input type="text" name="categoria" class="form-control col-md-6" value="{{ $producto->categoria }}" id="categoria">
    </div>
    
    <div class="mb-3">
        <label for="descripcion" class="form-label"> Descripción </label>
        <input type="text" name="descripcion" class="form-control col-md-6" value="{{ $producto->descripcion }}" id="descripcion">
    </div>
    
    <div class="mb-3">
        <label for="precio" class="form-label"> Precio </label>
        <input type="number" name="precio" class="form-control col-md-6" value="{{ $producto->precio }}" id="precio">
    </div>
    
    <div class="mb-3">
        <label for="stock" class="form-label"> Cantidad en stock </label>
        <input type="number" name="stock" class="form-control col-md-6" value="{{ $producto->stock }}" id="stock">
    </div>
    
    <input type="submit" class="btn btn-success" value="Guardar datos">
</form>

<button class="btn btn-danger mt-3" onclick="location.href='/producto'"> Regresar </button>