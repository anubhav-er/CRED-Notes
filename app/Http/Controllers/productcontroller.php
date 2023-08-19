<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
    public function index(){
        $product = Product::all();
        return view('products.index', ['products' => $product]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'notestitle' => 'required',
            'notescontent' => 'required',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }
    public function view(Product $product){
        return view('products.view', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'notestitle' => 'required',
            'notescontent' => 'required',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }
}