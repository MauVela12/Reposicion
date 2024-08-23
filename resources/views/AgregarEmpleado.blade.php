<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Empleado</title>
</head>
<body>
    <h1>Agregando Empleado</h1>

    <div>
        <form action="{{route('empleado-agregar')}}" method="POST">
            @csrf
            <div>
                <label for="IdPrestamo">ID:</label>
                <input type="text" id="IdPrestamo" name="IdPrestamo" required>
            </div>

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>

            <div>
                <label for="fechaIngreso">Fecha de Ingreso:</label>
                <input type="text" id="fechaIngreso" name="fechaIngreso" required>
            </div>

            <div>
                <label for="salario">Salario:</label>
                <input type="text" id="salario" name="salario" required>
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>