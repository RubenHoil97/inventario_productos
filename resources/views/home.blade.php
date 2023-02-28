@extends("principal")
@section("titulo", "Lista de productos")

@section("contenido")
<h1>Lista de productos</h1>

    <center>
        <div class="container">
            <!-- <input autocomplete="off" id="buscador" type="text" name="buscador" placeholder="Busqueda"> -->
            <center>
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody id="contenido" class="alldata">
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </center>
        </div>
    </center>
@endsection
