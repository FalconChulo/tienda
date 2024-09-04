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
      
      return view("tienda/inicio");
     }


     public function create(){

     }

     public function store(Request $request){

     }

     public function update ($id){

     }

     public function delete($id){

     }

     /* public function indexProducto(){
      
      
     } */


     public function createProducto(){

     }

     public function storeProducto(Request $request){

     }

     public function updateProducto ($id){

     }

     public function deleteProducto($id){

     }



}   