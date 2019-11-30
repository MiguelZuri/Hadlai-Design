<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categoria;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // $products = Product::withTrashed()->get(); // Muestra registros creados y eliminados;
        // $products = Product::onlyTrashed()->get(); // Muestra unicamente registros eliminados
        $categorias = Categoria::all();
        return view('productos.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nombre', 'id');
        // $categorias = Categoria::all();
        // $selectedCategoria = Categoria::first()->categoria_id;
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:35',
            'estilo' => 'required|string|max:35',
            'tipo_area' => 'required|string|max:35',
            'precio' => 'required|integer|min:1',
            'cantidad' => 'required|integer|min:1',
        ]);
        // Product::create($request->all());
        $producto = new Product([
            'nombre' => $request->nombre,
            'estilo' => $request->estilo,
            'tipo_area' => $request->tipo_area,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
          ]
      );
        $categoria = Categoria::find($request->categoria_id);
        $categoria->product()->save($producto);

        return redirect('productos');//->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::all();
        //dd($products);
        return view('productos', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categorias = Categoria::pluck('nombre', 'id');
        return view('productos.create', compact('products','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products= Product::findOrFail($id);
        $products->nombre = $request->input('nombre');
        $products->estilo = $request->input('estilo');
        $products->tipo_area = $request->input('tipo_area');
        $products->precio = $request->input('precio');
        $products->cantidad = $request->input('cantidad');
        $products->categoria_id = $request->input('categoria_id');
        $products->update();
  
        return redirect()->route('productos.index')
                          ->with(['message'=>'Informacion actualizada correctamente']);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productos.index');
    }
}
