<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un arreglo para poder manipular la info de la tabla cursos
        //a su vez el arreglo actuará como un objeto
         $cursito = curso::all();
         /*El método compact pide un parámetro que será nuestro array llamado cursito y va acompañando la vista que estamos llamando*/
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Con el método all() veo toda la información
        //return $request->all();
        //**IMPORTANTE**
        //return $request->input('name');
        //creamos una nueva instancia de un modelo
        $cursito = new curso();
        //esto me permitirá manipular la tabla
        $cursito->name = $request->input('name');
        $cursito->desc = $request->input('desc');
        $cursito->imagen = $request->input('image');
        //esto guarda
        if ($request->hasFile('image')){
            $cursito->imagen = $request->file('image')->store('public');
        }
        $cursito->save();
        return 'Guardado!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Creamos un arreglo para encontrar un sólo elemento
        $cursito = curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
