<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function mostrar() {
        $empleados = Empleado::all();

        return view('MostrarEmpleados', compact('empleados'));
    }

}
