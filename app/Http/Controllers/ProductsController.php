<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $product = new Product();
        $products = $product->all();
        return view("product", compact('products'));
    }
    public function create()
    {
        return view("product");
    }

    public function store(Request $req)
    {
        $req->validate([
            'Pro_name'  => 'required ',
            'Pro_price' => 'required',
            'file' => 'required',
            'cat_id'    => 'required',

        ]);
        $path = Storage::disk('public')->put('images', $req->file('file'));
        $product = new Product();
        $product->Pro_name    = $req['Pro_name'];
        $product->Pro_price = $req['Pro_price'];
        $product->Pro_image = 'storage/' . ($path);
        $product->cat_id = $req['cat_id'];
        $product->save();

        // $category = Category::where('cat_id', $req['cat_id']);
        // $category = $category->product()->save($product->id);

        return  redirect('product');
    }

    public function destroy($id)
    {
        $product = new Product();
        $product->destroy($id);
        return redirect('product');
    }

    public function edit($id)
    {
        $productModel = new Product();
        $product = $productModel->find($id);
        return view('editproduct', compact('product'));
    }

    public function update(Request $req, $id)
    {
        $path = "";
        $product = new Product();
        $product = $product->find($id);
        if (empty($req->file('file'))) {
            $path = $product['Pro_image'];
        } else {
            $path = 'storage/' . Storage::disk('public')->put('images', $req->file('file'));
        }
        $product->Pro_name    = $req['Pro_name'];
        $product->Pro_price = $req['Pro_price'];
        $product->Pro_image =  ($path);
        $product->cat_id = $req['cat_id'];
        $product->save();
        return redirect("product");
    }
}
