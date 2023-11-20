<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::all();

        return view('carrera.index', compact('carreras'));
        // return json_encode(['carreras'=>$carreras]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carrera.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:50',
            'descripcion' => 'required|string',
        ]);

        $carrera = Carrera::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            
        ]);

        return redirect()->route('carrera.index')->with('success', 'Carrera creado con éxito');
        // return json_encode(['carrera'=>$carrera]);
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
    public function edit(Carrera $carrera)
    {
        $data = compact('carrera');

        return view('carrera.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $this->validate($request, [
            'nombre' => 'required|unique:carreras,nombre,'.$carrera->id,
            'descripcion' => 'required|string',
         
        ]);

        $carrera->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
 
        ]);

        return redirect()->route('carrera.index')->with('success', 'Carrera actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carrera.index')->with('success', 'Carrera eliminado con éxito');
    }
}
