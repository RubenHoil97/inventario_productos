@extends("principal")
@section("titulo", "Agregar Producto")

@section("contenido")

<h1>Agregar Producto</h1>
<form action="/agregar/nuevo_producto" method="POST">
    @csrf
    <input autocomplete="off" required type="text" name="nombre" placeholder="Nombre del producto">
    <br><br>
    <input autocomplete="off" required type="text" name="descripcion" placeholder="Ligera descripción">
    <br><br>
    <input autocomplete="off" required type="text" name="precio" placeholder="Precio">
    <br><br>
    <input type="submit" value="Guardar">
</form>
@endsection