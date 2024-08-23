<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function mostrar() {
        $productos = Producto::all();

        return view('MostrarProductos', compact('productos'));
    }

    public function agregarProducto() {
        return view('AgregarProducto');
    }

    public function crear(Request $request) {
        $nvoProducto = new Producto();

        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->stock = $request->stock;
        $nvoProducto->pagaIsv = $request->pagaIsv;

        $nvoProducto->save();
        
        return redirect('/productos/mostrar');
    }
}
