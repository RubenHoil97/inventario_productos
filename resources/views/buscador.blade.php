<!-- @if (count($productos))
    @foreach ($productos as $item)
        <p>{{ $item->id .' - '. $item->nombre }}</p>
    @endforeach
@endif -->

@extends("principal")
@section("titulo", "Lista de productos")

@section("contenido")
    <!-- <form action="" method="POST">
        <input type="text" placeholder="Buscar" id="buscar">
    </form> -->
    <table>
         <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody id="contenido" class="searchdata">
            
        </tbody>
    </table>
@endsection