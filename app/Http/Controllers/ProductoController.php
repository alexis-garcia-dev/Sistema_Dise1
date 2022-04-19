<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('id' , 'desc')->pluck('name', 'id');
        return view('producto.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
            
        $producto->categoria_id  = $request->get('categoria_id');
        $producto->name          = request('name');
        $producto->slug          = Str::slug($request->get('name'));
        $producto->descriptions  = request('descriptions');
        $producto->extract       = request('extract');
        $producto->price         = request('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
                $producto->image = $file->getClientOriginalName();
        $producto->visible       = request('visible') ? 1 : 0;
    }
        $producto->save();
        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('producto.edit',['producto' => Producto::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->categoria_id  = auth()->id();
        $producto->name          = $request->get('name');
        $producto->slug          = Str::slug($request->get('name'));
        $producto->descriptions  = $request->get('descriptions');
        $producto->extract       = $request->get('extract');
        $producto->price         = $request->get('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
                $producto->image = $file->getClientOriginalName();
            }
        $producto->visible       = $request->get('visible') ? 1 : 0;
        $producto->update(); 

        return redirect()->route('productos.index')
            ->with('success', 'Producto Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto Eliminado');
    }
}
