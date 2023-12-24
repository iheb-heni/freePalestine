<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products = Product::all();
        return view('products.index', [
            'products' => $products,
        ]);    }
    public function showProductadmin(){
        return view('admin.product.index');

    }
    public function showListProduct(){
        $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);

    }
    public function showListProductadmin(){
        $products = Product::all();

        return view('admin.product.index', [
            'products' => $products,
        ]);

    }

    public function showAddProductForm(){
        return view('products.add');
    }
    public function showAddProductFormadmin(){
        return view('admin.product.add');
    }

    public function handleAddProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->codeabar = $request->codeabar;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images', $filename);
            $product->image=$filename;
        }
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with([
            'message' => 'ajouter avec succes !',
            'alert-type' => 'success'
        ]);

    }


    public function handleDeleteProduct($id){
        $product = Product::findOrFail($id);
    $product->delete();
        return back();
    }
    public function handleEditProduct($id){
        $product = Product::find($id);
        return view('admin.product.editProduct',[
            'product' => $product,
        ]);
    }
    public function handleUpdateProduct(Request $request, $id)
{
    $product = Product::find($request->id);

    if ($product) {
        $product->name = $request->name;
        $product->codeabar = $request->codeabar;
        $product->image = $request->image;
        $product->description = $request->description;

        $product->update();

        return redirect('home');}
    
}



}
