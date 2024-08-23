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
}
