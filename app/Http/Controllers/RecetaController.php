<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Receta;
use App\Models\Producto;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recetas=Receta::all();
        
        return view('recetas.recetas',['recetas'=>$recetas]);
    }
    
    public function ingredientes($receta_id){
        $receta=Receta::find($receta_id);
        $ingredientes_receta=$receta->productos->unique('id')->pluck('id');
                
        $ingredientes=Producto::whereNotIn('id',$ingredientes_receta)->get();
                
        return view('recetas.lista_ingrediente',['ingredientes'=>$ingredientes,'receta'=>$receta]);
    }
    
    public function agregarIngrediente(Request $request){
        $receta=Receta::find($request->receta_id);
        $receta->productos()->attach($request->ingrediente_id);
        $ingredientes_receta=$receta->productos->unique('id')->pluck('id');
        $ingredientes=Producto::whereNotIn('id',$ingredientes_receta)->get();
        return view('recetas.lista_ingrediente',['ingredientes'=>$ingredientes,'receta'=>$receta]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('recetas.nueva_receta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $receta=new Receta();
            $receta->nombre=$request->nombre;
            $receta->user_id=Auth::user()->id;
        $receta->save();
        return redirect('recetas/create');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
