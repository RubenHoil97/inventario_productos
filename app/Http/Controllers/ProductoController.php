<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderBy('nombre', 'ASC')->get();
        
        return view('home', ["productos" => $productos]);
    }

    public function agregarProducto(Request $peticion) {
        $producto = new Producto;
        
        $producto->id = $peticion->id;
        $producto->nombre = $peticion->nombre;
        $producto->descripcion = $peticion->descripcion;
        $producto->precio = $peticion->precio;

        $producto->save();

        return redirect()->route('home')->with('mensaje', 'Producto agregado');
    }

    public function buscador(Request $request) {
        $output = "";

        $precio = (float) $request->buscar;
        $producto = Producto::where('nombre','LIKE','%'.$request->buscar.'%')
                            ->orWhereRaw('CAST(precio AS DECIMAL(10,2)) <= ?', [$precio])
                            ->get();
                        
        foreach($producto as $producto) {
            $output.=
            '<tr>
                <td>'.$producto->id.'</td>
                <td>'.$producto->nombre.'</td>
                <td>'.$producto->descripcion.'</td>
                <td>'.$producto->precio.'</td>
            </tr>';
        }
        return response($output);
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
        //
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
