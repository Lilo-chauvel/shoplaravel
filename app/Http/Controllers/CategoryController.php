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
        $categories = Category::orderBy('id')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'nullable|string'
        ]);

        Category::create($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Votre categorie a bien ete creee.')
            ->with('color', 'bg-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorySearch = Category::where('id', '=', $id)->orWhere('slug', '=', $id)->with('products')->firstOrFail();
        return view('categories.search', compact('categorySearch', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'nullable|string'
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Votre categorie a bien ete mise a jour.')
            ->with('color', 'bg-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $categoryName = $category->name;
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'La categorie "' . $categoryName . '" a bien ete supprimee.')
            ->with('color', 'bg-success');
    }
}
