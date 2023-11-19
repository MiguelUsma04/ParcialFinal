<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->paginate(10);

        return view('estudiante.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $carreras = Carrera::all()->pluck('nombre','id')->toArray();

        return view('estudiante.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required',
        'telefono' => 'required',
        'carrera_id' => 'required'
    ]);

    Estudiante::create($request->all());

    return redirect()->route('estudiante.index')->with('success', 'Estudiante creado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        
        $carreras = Carrera::all()->pluck('nombre','id');

        $data = compact('estudiante','carreras');

        return view('estudiante.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'numIdentidad' => 'required',
            'carrera_id' => 'required',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiante.index')->with('success', 'Estudiante actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiante.index')->with('success', 'Estudiante eliminado con éxito');
    }
}
