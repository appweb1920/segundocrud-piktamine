<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ref;

class RefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $datos = Ref::all();
        return view ('index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('ref.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $ref = new Ref();
         $ref->Nombre = $request->Nombre;
         $ref->Descripcion = $request->Descripcion;
         $ref->npiezas = $request->Npiezas;
         $ref->costoporpieza = $request->Cpieza;
         $ref->save();
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Ref::findOrFail($id);
        
        return view ('edit',compact('dato'));
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
        //return view ('index',compact('datos'));
        
        $ref = Ref::findOrFail($request->id);
        $ref->Nombre = $request->Nombre;
        $ref->Descripcion = $request->Descripcion;
        $ref->npiezas = $request->Npiezas;
        $ref->costoporpieza = $request->Cpieza;
        $ref->save();
        
        $datos = Ref::all();
        return view ('index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = Ref::findOrFail($id);
        $nota->delete();
        
        return back();
    }
}
