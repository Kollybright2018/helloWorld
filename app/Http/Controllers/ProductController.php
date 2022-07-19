<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
 
  
    public function create(){
        return view('pages.create');
    }

    // public function saveproduct(){
    //      return "I will save your forms";
    // }
    public function saveproduct(Request $request){
       $this->validate($request, ['product_name' => 'required', "product_price" => "required", "product_desc" => "required"]);
        // using Query builder
        // $data =array();
        // $data['product_name']=$request->product_name;
        // $data['product_price']=$request->product_price;
        // $data['product_description']=$request->product_desc;
        
        // DB::table('products')
        //         ->insert($data);

                // using the model
        $product = new product();
        $product->product_name =$request->product_name;
        $product->product_price =$request->product_price;
        $product->product_description =$request->product_desc;
        $product->save();

        // Session::put('Success', "The product has been added Successfully");

        return redirect('/create');
    }
    public function editproduct($id){
        $product = Product::find($id);
        return view('pages.editproduct')->with('product', $product);
    }
    public function updateproduct(Request $request ){
    $product = Product::find($request->input('product_id'));
    $product->product_name = $request->input('product_name');
    $product->product_price = $request->input('product_price');
    $product->product_description = $request->input('product_desc');

    $product->update();


    Session::put('sucess', "Product updated");
    return redirect('/service');
    }
    public function deleteproduct($id){
        // using db builder method 
        DB::table('products')
        ->where('id', $id)
        ->delete();
        $product = Product::find($id);
        $product->delete();

       return redirect('/service');
    }

    // public function category(){
    //     return view('category.index');
    // }

    // public function allcart(){
    //     return view('category.show');
    // }

    // public function editcart(){
    //     return view('category.edit');
    // }
}

