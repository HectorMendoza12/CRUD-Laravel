<?php

namespace App\Http\Controllers;
use Validator;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate(5);
        return view('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');
        Producto::insert($datosProducto);
        return redirect('producto')->with('mensaje', 'Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findorFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token', '_method']);
        Producto::where('id','=', $id)->update($datosProducto);
        $producto = Producto::findorFail($id);
        return redirect('producto')->with('mensaje', 'Producto editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('producto')->with('mensaje', 'Producto eliminado');;
    }
}
