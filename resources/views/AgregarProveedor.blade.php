<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Proveedor</title>
</head>
<body>
    <h1>Agregando Proveedor</h1>

    <div>
        <form action="{{route('proveedor-agregar')}}" method="POST">
            @csrf
            <div>
                <label for="idProveedor">ID:</label>
                <input type="text" id="idProveedor" name="idProveedor" required>
            </div>

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div>
                <label for="fechaRegistro">Fecha de Registro:</label>
                <input type="fechaRegistro" id="fechaRegistro" name="fechaRegistro" required>
            </div>

            <div>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>

            <div>
                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" required>
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>