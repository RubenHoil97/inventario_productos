<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    <link href='{{ asset("css/app.css")}}'rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- <style>
    /*
        Poner bordes a las tablas. Tomado de:
        https://parzibyte.me/blog/2018/10/16/tabla-html-bordes-css/
    */
    table {
        border-collapse: collapse;
    }
    
    table,
    th,
    td {
        border: 1px solid black;
    }
    
    th,
    td {
        padding: 5px;
    }
    </style> -->
</head>
<body>
    <input type="search" id="buscar" name="buscador" placeholder="Buscador">
    <a href="{{ route('formAgregar') }}" class="input">Agregar</a>
    @yield("contenido")
    <hr>
    <p>
    Lista Productos de MySQL con Laravel. Creado por Ruben
    </p>

    <!-- <center>
        <div id="resultados"></div>
    </center> -->
    <script type="text/javascript">
        $('#buscar').on('keyup', function(){
            $value=$(this).val();

            if($value) {
                $('alldata').hide();
                $('searchdata').show();
            } else {
                $('alldata').show();
                $('searchdata').hide();
            }

            $.ajax({
                type: 'get',
                url: '{{URL::to('buscar')}}',
                data:{'buscar':$value},

                success:function(data) {
                    console.log(data);
                    $('#contenido').html(data);
                }
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>