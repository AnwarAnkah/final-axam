<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerproduct extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function store(Request $request)
    {
       
        $product =new Prouct();
        $product->Name = $request->Nameproduct;
        $product->quantity = $request->productquantity;
        $product->price = $request->productprice;
        $product ->save();

        return redirect()->back();

    }
    public function edit(Product $product)
    {
       
        return view('product.index',compact('product'));
    }
   public function update(Request $request , Product $product)
   {
    $request -> validate([
        'producttitle'=>'required',
        'productdescription'=>'required',
        'productprice'=>'required',
    ]);

       

    $product->Name = $request->Name;
    $product->quentity = $request->productquentity;
    $product->price = $request->productprice;

        $product ->save();

        return redirect('/product');
   }
   public function destroy(Product $product){
        
    
    $product->delete();
   return redirect('/product');
   }
}
}
