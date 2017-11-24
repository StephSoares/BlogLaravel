<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    protected $redirectTo = '/category';

    public function index(){
        $categories = Category::all();
        return view('category.list', ['categories' => $categories]);

    }
    public function create(){
        return view('category.create');
    }

    public function store(StoreBlogCategory $request){
        $category = new Category;
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }
    //http://project.dev/category/update/1
    public function update($id){

        $category = Category::find($id);
        return view('category.update', ['category' => $category]);
    }

    public function edit(StoreBlogCategory $request, $id){

        $category = Category::find($id);
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }


}