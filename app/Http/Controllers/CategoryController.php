<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $catgories = Category::all();
        return view('categories.index', compact('catgories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|min:5'
        ]);
        Category::create([
            'title' => $request->title
        ]);
        return redirect()->route('categroy.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        // dd($category, $request->all());

        $request->validate([
            'title' => 'required|min:5'
        ]);
        $category::create([
            'title' => $request->title
        ]);
        return redirect()->route('categroy.index');
    }

    public function destroy(Category $category)
    {
        // dd($category);
        $category->delete();
        return redirect()->route('categroy.index');
    }
}
