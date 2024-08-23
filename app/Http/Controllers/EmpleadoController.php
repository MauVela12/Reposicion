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

    public function agregarEmpleado() {
        return view('AgregarEmpleado');
    }

    public function crear(Request $request) {
        $nvoEmpleado = new Empleado();

        $nvoEmpleado->IdPrestamo = $request->IdPrestamo;
        $nvoEmpleado->nombre = $request->nombre;
        $nvoEmpleado->apellido = $request->apellido;
        $nvoEmpleado->fechaIngreso = $request->fechaIngreso;
        $nvoEmpleado->salario = $request->salario;

        $nvoEmpleado->save();
        
        return redirect('empleados/mostrar');
    }

}
