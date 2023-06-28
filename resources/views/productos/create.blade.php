@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('productos.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
            descripcion
            <br>
            <input type="text" name="descripcion">
        </label>
        <br>
        <label>
                precio
                <br>
                <input type="text" name="precio">
            </label>
            <br>
            <label>
                    existencias
                    <br>
                    <input type="text" name="existencias">
                </label>
                <br>
                <label>
                        proveedor
                        <br>
                        <input type="text" name="proveedor">
                    </label>
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>