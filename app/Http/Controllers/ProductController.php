<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        $products = product::orderBy('name', 'Asc')->get();
        return view('products',compact('products'),compact('product_id'));
    }
    public function index2(){
        $products = product::orderBy('name', 'Asc')->get();
        return view('createProduct',compact('products'));
    }
    public function store(Request $request){


        $product = new product();
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->category = $request->product_category;
        $product->quantity = $request->product_qty;
        $product->save();

        return redirect()->back();
    }
    public function delete($id){
        $product = product::where('id',$id)->delete();
         return redirect()->back();

    }
    public function edit($id){
        $product = product::where('id',$id)->get();

        return view('updateProduct',compact('products'));

    }
    public function update($id, Request $request){
        $product = product::where('id',$id);
        $product-> update(['name' => $request->product_name]);
        $product-> update(['price' => $request->product_price]);
        $product-> update(['category' => $request->product_category]);
        $product-> update(['quantity' => $request->product_qty]);

        $products = product::orderBy('name', 'Asc')->get();
        return view('products',compact('products'));

    }

}
