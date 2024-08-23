<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Empleados</title>
</head>
<body>
    <h1>Mostrando Empleados</h1>
    
    <table>
        <thead>
            <tr>
                <th>Código del Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->IdPrestamo}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaIngreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>