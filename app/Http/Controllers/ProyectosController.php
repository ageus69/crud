<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos/listadoProyectos', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos/proyectosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibir datos

        //validar
        $request->validate([
            'nombreProyecto' => 'required|min:5|max:128',
            'nombrePersona' => 'required|min:5|max:64',
            'correo' => 'required|min:5|max:64|email:rfc,dns',
            'detalles' => 'required'
        ]);

        //guardar
        Proyecto::create($request->all());

        //redireccionar
        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return view('proyectos/datosProyecto', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos/proyectosForm', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //validar
        $request->validate([
            'nombreProyecto' => 'required|min:5|max:128',
            'nombrePersona' => 'required|min:5|max:64',
            'correo' => 'required|min:5|max:64|email:rfc,dns',
            'detalles' => 'required'
        ]);

        Proyecto::where('id', $proyecto->id)->update($request->except('_method','_token'));

        return redirect()->route('proyectos.show', [$proyecto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
