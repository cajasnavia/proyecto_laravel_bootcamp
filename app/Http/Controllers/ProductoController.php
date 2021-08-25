<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_productos = DB::table('producto')->get();
        return view('admin.lista_productos', ['productos'=>$lista_productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_crear_producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
            'pro_nombre'=>'required|min:2|max:10',
            'pro_precio'=>'required|numeric',
            'pro_foto' => 'mimes:png,jpg,jpeg|max:20048'
        ]);

        // //CON MODELO
        // $producto = new Producto();
        // $producto->cat_id = 2;
        // $producto->pro_nombre = $request->input('pro_nombre');
        // $producto->pro_precio = $request->input('pro_precio'); 
        // $producto->save();


        //GUARDADO FOTO        
        if($request->file()) {
            $name = Str::random();
            $ruta_foto = "/storage/".$request->file('pro_foto')->store('foto_productos', 'public'); // store encadenado
            // $ruta_foto = Storage::putFile('foto_usuarios', $request->file('pro_foto'), 'public'); // putFile estatico
        }else{
            $ruta_foto = "/storage/foto_productos/default_foto_producto.png";
        }


        //CON CONSULTA DIRECTA
        DB::table('producto')->insert([
            'cat_id' => 2,
            'pro_nombre' => $request->input('pro_nombre'),
            'pro_precio' => $request->input('pro_precio'),
            'pro_foto' => $ruta_foto
        ]);
        return redirect('/productos');
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
        return "{'operacion':'METODO GET Mostrar los datos de un producto X'}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //CONSULTA QUERY BUILDER
        //$producto = DB::table('producto')->where('pro_id', $id)->first();;
        //CON MODELO
        $producto = Producto::where('pro_id', $id)->first();
        return view('admin.form_editar_producto', ['producto'=>$producto]);
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
        $validacion = $request->validate([
            'pro_nombre'=>'required|min:2|max:10',
            'pro_precio'=>'required|numeric',
        ]);


        //CON CONSULTA DIRECTA
        // $id = $request->input('pro_id');//ESTA LINEA NO INCLUIR
        // DB::table('producto')->where('pro_id', $id)
        //     ->update([
        //     'cat_id' => 2,
        //     'pro_nombre' => $request->input('pro_nombre'),
        //     'pro_precio' => $request->input('pro_precio')
        // ]);


        //CON MODELO
        $producto = Producto::where('pro_id', $id)->first();
        $producto->cat_id = 2;
        $producto->pro_nombre = $request->input('pro_nombre');
        $producto->pro_precio = $request->input('pro_precio'); 
        $producto->save();
        
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::where('pro_id', $id)->first();
        $producto->delete();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function remate(){
        return "{'operacion':'METODO GET Estos productos estan en remate'}";
    }

    
}
