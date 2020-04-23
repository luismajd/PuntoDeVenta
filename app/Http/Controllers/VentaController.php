<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all(); //->pluck('descripcion', 'id');
        //dd($productos);

        /*
        $productos = array();

        foreach(Producto::all() as $producto)
        {
            $productos[] = [$producto->descripcion, $producto->precio];
        }

        dd($productos);*/

        return view('ventas.ventaForm', compact('productos'));
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
        $list = $request->all()['agregar']; //Arreglo completo de checkboxes

        $activated = array();

        //Llenar lista de activados 0/1
        $n = sizeof($list);
        for($i = 0; $i < $n; $i++)
        {
            if($list[$i] == '0')
            {
                if($i != $n-1)
                {
                    if($list[$i+1] == '1')
                    {
                        continue;
                    }
                }
            }
            $activated[] = $list[$i];
        }

        $id_productos = array();
        $precios = array();
        $cantidades = array();

        //Llenar listas de atributos para los productos activados
        $n = sizeof($activated);
        for($i = 0; $i < $n; $i++)
        {
            if($activated[$i] == '1')
            {
                $id_productos[] = $request->producto_id[$i];
                $precios[] = $request->precio[$i];
                $cantidades[] = $request->cantidad[$i];
            }
        }

        $venta = Venta::create($request->all());

        //Agregar a tabla pivote
        $n = sizeof($id_productos);
        for($i = 0; $i < $n; $i++)
        {
            $venta->productos()->attach($id_productos[$i], ['precio' => $precios[$i], 'cantidad' => $cantidades[$i]]);
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
