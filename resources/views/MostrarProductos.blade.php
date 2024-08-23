<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Productos</title>
</head>
<body>
    <h1>Mostrando Productos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Código del Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Paga ISV</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->pagaIsv}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>