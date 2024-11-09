<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos=Producto::all();
                
        return view('productos.productos',['productos'=>$productos]);
    }
    // Metodo para buscar productos
    public function buscar(Request $request){
       // $produtos=Producto::where('nombre',$request->buscar)->get();
        $productos=DB::table('productos')
            ->where('nombre','like','%'.$request->buscar.'%')
            ->get();
        return view('productos.productos',['productos'=>$productos]);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.agregar-producto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto=new Producto;
            $producto->nombre=$request->nombre;
            $producto->marca=$request->marca;
            $producto->presentacion=$request->presentacion;
            $producto->cantidad=$request->cantidad;
        $producto->save();
        
        return redirect("/productos");
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
        $producto=Producto::find($id);
        
        return view('productos.editar-producto',['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto=Producto::find($id);
            $producto->nombre=$request->nombre;
            $producto->marca=$request->marca;
            $producto->presentacion=$request->presentacion;
            $producto->cantidad=$request->cantidad;
        $producto->save();
        
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //$producto=Producto::destroy($id);
        
        return redirect('/productos')->with('errors','Datos eliminados de forma correcta');
    }
}
