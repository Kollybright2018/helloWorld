<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   //using DB builder Method
use App\Models\Product;           //using eloqunt method
 use Illuminate\Support\Facades\Session  ; 
class PagesController extends Controller
{
    //

    public function myform(Request $request){
    $first = $request->fname;
    return $first;
    }
    public function about($name){
        $a = [];
        for($i =0; $i<10; $i++){
            $a[] = $i*5;
        }

        return view('pages.about', compact(['a', 'name']));

    }

    public function home(){
        return view('welcome');
    }

    public function form(){
        return view('pages.form');
    }
    public function index(){
        return view('pages.index');
    }

    public function service(){

        // using laravel query buider to retriebve data and use iit
        // $products = DB::table('products') 
        //                     ->get();

        // let use eleqote method now by use our modal
        // $products = Product::get(); //we can use all()
        // to get data with orderby
        $products =Product::orderBy('product_name', 'desc')->paginate(3);
        return view('service')->with('products', $products);
    }

    public function show($id){

        // this is db builder method
        // $product = DB::table('products')
        //                     ->where('id', $id)
        //                     ->first();


        // let try the eloquont mthod
        $product = Product::find($id);

        // return "The product id ".$id;
        return view('pages.show')->with('product', $product);
    }


    
}
