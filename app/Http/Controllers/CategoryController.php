<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get(); 
        return view('category.index', [
            'categories'=>$categories
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'grades'=> 'required|numeric'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'grades' => $request->grades,
        ]);

        return redirect('/category')->with('status', 'Created Successsfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'grades'=> 'required|numeric'
        ]);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'grades' => $request->grades,
        ]);

        return redirect('/category')->with( 'status', 'Updated Successsfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/category')->with('status', 'Deleted Successsfully');

    }
}
