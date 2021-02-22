<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = new Category();
        $categories = $category->all();
        return view("category", compact('categories'));
    }

    public function create() {
        return view("category");
    }

    public function store(Request $req) {
        // cat_name
        $category = new Category();
        $req->validate([
            'cat_name' => 'required'
        ]);
        $category->cat_name = $req['cat_name'];

        $category->save();
        return redirect('category');
    }

    public function destroy($id) {
        $category = new Category();
        $category->destroy($id);
        return redirect('category');
    }

    public function edit($id) {
        $categoryModel = new Category();
        $category = $categoryModel->find($id);
        return view('editcategory' , compact('category'));
    }
    
    public function update(Request $req, $id) {
        $category = new Category();
        $category = $category->find($id);
        $category->cat_name    = $req['cat_name'];
        $category->save();
        return redirect("category");
    } 
}
