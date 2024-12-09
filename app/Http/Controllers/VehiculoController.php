<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $vehiculos = Vehiculo::where('nombre', 'like', "%$search%")
            ->orWhere('categoria', 'like', "%$search%")
            ->orWhere('id', 'like', "%$search%")
            ->get();

        return view('index', compact('vehiculos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'descripcion_vehiculo' => 'required',
        ]);

        Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index');
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('edit', compact('vehiculo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'descripcion_vehiculo' => 'required',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index');
    }

    public function destroy($id)
    {
        Vehiculo::findOrFail($id)->delete();
        return redirect()->route('vehiculos.index');
    }
}

