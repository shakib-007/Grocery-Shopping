<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Events\NewProductAddedEvent;
use App\Http\Controllers\Response;

class ProductController extends Controller
{
    //
    public function productList()
    {

        $product = new Product();
        // $product->name = 'apple';
        // $product->sku = '1001';
        // $product->description = 'fruit';
        // $product->available_quantity = 100;
        // $product->purchase_price = 10;
        // $product->save();

        // return redirect('/show');

    }
    public function showProduct()
    {
        $products = Product::all();
        return view('internals.showproduct',compact('products'));
    }

    public function addProduct()
    {
        return view('internals.addproduct');
    }

    public function storeProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'availablequantity' => 'required',
            'purchaseprice' => 'required',
            'image' => 'image|max:3072'
        ]);


        $product = new Product();

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->available_quantity = $request->availablequantity;
        $product->purchase_price = $request->purchaseprice;
        // $product->save();

        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();      
            // $request->image->move(public_path('images'), $imageName);
            $request->image->storeAs('images', $imageName);
            $product->image = $imageName;
             
            // $url = Storage::url('file.jpg');
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        $product->save();

        // event(new NewProductAddedEvent($product));

        // dump('new product');

        return redirect('/show')->with('success','Product Added');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('internals.editproduct')->with('product',$product);
    }

    public function updateProduct(Request $request , $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'availablequantity' => 'required',
            'purchaseprice' => 'required'
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->available_quantity = $request->availablequantity;
        $product->purchase_price = $request->purchaseprice;
        $product->save();

        return redirect('/show')->with('success','Product Updated');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
  
        return redirect('/show')->with('success','Product Deleted');

    }

    public function order()
    {
        $products = Product::all();
        return view('internals.orderview')->with('products', $products);
    }

    
}
