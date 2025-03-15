<?php

namespace App\Http\Controllers;

use App\Models\DbMoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class DbMotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registroMoto = DbMoto::All();

        $contador = $registroMoto->count();

        return('Motos cadastradas: '.$contador.$registroMoto.Response()->json([],Response::HTTP_NO_CONTENT));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registroMoto  = $request->All();
        
        $validaDados = Validator::make($registroMoto,[
            'modelo'=>'required',
            'marca'=>'required',
            'ano'=>'required',
        ]);

        if($validaDados->fails()){
            return 'Registros faltantes:'.Response()->json([],Response::HTTP_NO_CONTENT); 
        }
        
        $enviaDados = DbMoto::create($registroMoto);

        if($enviaDados){
            return 'Registros cadastrados: '.Response()->json([],Response::HTTP_NO_CONTENT);
        }else{
            return 'Registros não cadastrados: '.Response()->json([],Response::HTTP_NO_CONTENT);
        }

    
    }

    /**
     * Display the specified resource.
     */
    public function show(DbMoto $DbMoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DbMoto $DbMoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DbMoto $DbMoto)
    {
        //
    }
}
