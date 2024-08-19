<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrantes;
use App\Models\Equipo;

class IntController extends Controller
{
    public function index()
    {
        $integrantes = Integrantes::all();
        $equipos = Equipo::all();
        return view('integrantes.index', compact('integrantes', 'equipos'));
    }

    public function create()
    {
        $equipos = Equipo::all();
        return view('integrantes.create', compact('equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameteam' => 'required|string|max:255',
            'number' => 'required|integer',
            'name' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'age' => 'required|integer',
            'place' => 'required|string|max:255',
            'phone' => 'required|integer',
        ]);

        Integrantes::create($request->all());

        return redirect()->route('integrantes.equipo', ['name' => $request->nameteam])->with('success', 'Integrante creado con éxito');
    }

    public function edit($id)
    {
        $integrante = Integrantes::findOrFail($id);
        $equipos = Equipo::all();
        return view('integrantes.edit', compact('integrante', 'equipos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nameteam' => 'required|string|max:255',
            'number' => 'required|integer',
            'name' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'age' => 'required|integer',
            'place' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);

        $integrante = Integrantes::findOrFail($id);
        $integrante->update($request->all());

        $nameteam = $request->input('nameteam');

        return redirect()->route('integrantes.equipo', ['name' => $nameteam])->with('success', 'Integrante actualizado con éxito');
    }

    public function destroy($id)
    {
        $integrante = Integrantes::findOrFail($id);
        $nameteam = $integrante->nameteam; // Captura el nombre del equipo
        $integrante->delete();

        return redirect()->route('integrantes.equipo', ['name' => $nameteam])->with('success', 'Integrante eliminado con éxito');
    }


    public function showIntegrantes($name)
    {
        // Obtén los integrantes del equipo específico
        $integrantes = Integrantes::where('nameteam', $name)->get();

        // Retorna la vista con los integrantes y el nombre del equipo
        return view('integrantes.index', compact('integrantes', 'name'));
    }
}
