<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'nullable',
            'celular'=>'nullable',
            'nit'=>'nullable',
        ]);

        $cliente = Cliente::create($request->all());

        return response()->json([
            'mensaje'=>'Cliente creado exitosamente',
            'cliente'=> $cliente
        ], 201 );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = Cliente::find($id);
        if(!$cliente){
            return response()->json(
                [
                    'mensaje'=>'Cliente no encontrado'
                ], 404
                );
        }
        return response()->json($cliente, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente = Cliente::find($id);
        if(!$cliente){
            return response()->json(
                [
                    'mensaje'=>'Cliente no encontrado'
                ], 404
                );
        }

        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'nullable',
            'celular'=>'nullable',
            'nit'=>'nullable',
        ]);

        $cliente = Cliente::update($request->all());

        return response()->json([
            'mensaje'=>'Cliente creado exitosamente',
            'cliente'=> $cliente
        ], 201 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
