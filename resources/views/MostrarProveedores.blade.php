<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Proveedores</title>
</head>
<body>
    <h1>Mostrando Proveedores</h1>
    
    <table>
        <thead>
            <tr>
                <th>Código de Proveedor</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>Teléfono</th>
                <th>correo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->IdProveedor}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fechaRegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>