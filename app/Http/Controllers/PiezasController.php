<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piezas;

class PiezasController extends Controller
{
    public function index()
    {
        $piezas = Piezas::all();
        return view('piezas')->with('piezas',$piezas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(Request $request)
    {
        $piezas = new piezas;
        $piezas->nombre = $request->nombre;
        $piezas->descripcion = $request->descripcion;
        $piezas->numPZ = $request->numPZ;
        $piezas->costo = $request->costo;
        $piezas->save();
        
        return redirect('/piezas');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piezas = Piezas::find($id);
        return view('detallepiezas')->with($piezas);
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

    public function MuestraEdicion($id)
    {
        // buscar dato
        $piezas = Piezas::find($id);
        // pasar el dato a la vista
        return view('editaDato')->with('piezas',$piezas);
    }

    public function guardaEdicion(Request $request)
    {
        $piezas = Piezas::find($request->id);
        if(!is_null($piezas))
        {
            $piezas->nombre = $request->nombre;
            $piezas->descripcion = $request->descripcion;
            $piezas->numPZ = $request->numPZ;
            $piezas->costo = $request->costo;
            $piezas->save();
        }
        return redirect('/piezas');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piezas = Piezas::find($id);
        $piezas->delete();
        return redirect('/piezas');
    }
}
