<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\productos;
use App\Models\usuarios;


class MiController extends Controller {  
    public function index(){
      
      $users=usuarios::all();
      $produs=productos::all();

        return view("tienda/inicio", compact("users", "produs"));
     }


     public function create(){

      $produs=productos::all();
      return view("tienda/articulos", compact("produs"));
      

     }

     public function store(Request $request, $id){
       $produ=productos::find($id);
       

       usuarios::create([
         'nombre'=>$request->nombre,
         'articulo_id'=>$produ->id,
         'cantidad'=>$request->cantidad,
         'total'=>($produ->precio*($request->cantidad)),
       ]);

         $users=usuarios::all();
         $produs=productos::all();
 
         return view("tienda/inicio", compact("users", "produs"));
     }

     public function update ($id){
      $user=usuarios::where('id', $id)->first();
      $produs=productos::all();

      return view("tienda/editarUsuario", compact("user", "produs"));
     }

     public function storeUpdate(Request $request, $id){

      usuarios::find($id)->update([
        'nombre'=>$request->nombre,
        'articulo_id'=>($request->producto),
        'cantidad'=>($request->cantidad),
        'total'=>(($request->producto)*$request->cantidad),
      ]);

      $users=usuarios::all();
      $produs=productos::all();

      return view("tienda/inicio", compact("users", "produs"));

      
      

     }

     public function delete($id){

      usuarios::find($id)->delete();
      return redirect()->route('crud.index');

     }

     public function indexProducto($id){


      $produ=productos::find($id);

      return view("tienda/agregarArticulo", compact('produ'));
         
     }


     public function createProducto(){


        return view("tienda/nuevoArticulo");
     }

     public function storeProducto(Request $request){
         productos::create([
            'articulo'=>$request->articulo,
            'precio'=>$request->precio,
         ]);

         $produs=productos::all();
         return view("tienda/articulos", compact("produs"));


     }

     public function updateProducto ($id){

      $produ=productos::where('id', $id)->first();

      return view("tienda/editarProducto", compact("produ"));

     }

     public function storeUpdateProducto (Request $request, $id){

      productos::find($id)->update([
        "articulo"=> $request->nombre,
        "precio"=> $request->precio,
      ]);

      $produs=productos::all();
      return view("tienda/articulos", compact("produs"));

     }

     public function deleteProducto($id){

      try{
        productos::find($id)->delete();
        return redirect()->route('crud.create');

      }catch (\Exception $e){
        $err='error wue';
        return redirect()->route('crud.create')->withErrors($err);
      }

     }



}   