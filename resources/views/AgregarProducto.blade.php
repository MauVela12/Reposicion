<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregando Producto</h1>

    <div>
        <form action="{{route('producto-agregar')}}" method="POST">
            @csrf
            <div>
                <label for="descripcion">Descripción del Producto:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>

            <div>
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" required>
            </div>

            <div>
                <label for="stock">Cantidad en Stock:</label>
                <input type="text" id="stock" name="stock" required>
            </div>

            <div>
                <label for="pagaIsav">Paga ISV</label>
                <input type="text" id="pagaIsv" name="pagaIsv" required>
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>