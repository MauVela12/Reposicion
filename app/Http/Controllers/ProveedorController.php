<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function mostrar() {
        $proveedores = Proveedor::all();

        return view('MostrarProveedores', compact('proveedores'));
    }

    public function agregarProveedor() {
        return view('agregarProveedor');
    }

    public function crear(Request $request) {
        $nvoProveedor = new Proveedor();

        $nvoProveedor->IdProveedor = $request->IdProveedor;
        $nvoProveedor->nombre = $request->nombre;
        $nvoProveedor->fechaRegistro = $request->fechaRegistro;
        $nvoProveedor->telefono = $request->telefono;
        $nvoProveedor->correo = $request->correo;

        $nvoProveedor->save();
        
        return redirect('proveedores/mostrar');
    }
}
