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

     }

     public function deleteProducto($id){

      productos::find($id)->delete();
      return redirect()->route('crud.create');

     }



}   