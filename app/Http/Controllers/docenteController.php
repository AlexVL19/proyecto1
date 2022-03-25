<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocentesRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = docente::all();
        return view('docentes.index', compact('doc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocentesRequest $request)
    {
        $doc = new docente();
        $doc->name = $request->input('name');
        $doc->second_name = $request->input('ape');
        $doc->imagen_docente = $request->input('imagedoc');
        $doc->title = $request->input('title');
        $doc->associate = $request->input('asoc');

        if ($request->hasFile('imagedoc')){
            $doc->imagen_docente = $request->file('imagedoc')->store('public');
        }
        $doc->save();
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
        $doc = docente::find($id);
        return view('docentes.show', compact('doc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = docente::find($id);
        return view('docentes.edit', compact('doc'));
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
        $doc = docente::find($id);
        $doc->fill($request->except('imagedoc')); //Con except se hacen excepciones cuando se usa fill
        if ($request->hasFile('imagedoc')){
            $doc->imagen_docente = $request->file('imagedoc')->store('public');
        }
        $doc->save();

        return 'Recurso actualizado!';
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
