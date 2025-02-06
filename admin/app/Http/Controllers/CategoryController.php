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
        $categories = Category::all();

        return view('category.index', compact('categories'));
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
            'name' => 'required|array',
            'name.en' => 'required|string',
            'name.bn' => 'required|string',
        ]);

        // Check if the same name exists for the combination of languages
        $exists = Category::whereJsonContains('name', ['en' => $request->name['en']])
                          ->orWhereJsonContains('name', ['bn' => $request->name['bn']])
                          ->exists();

        if ($exists) {
            return redirect()->back()->withErrors(['name' => 'The category name must be unique across all languages.'])->withInput();
        }

        Category::create([
            'name' => $request->name,
            'is_visible' => $request->has('is_visible') ? $request->is_visible : true, // Default to true
            'position' => Category::getNextPosition(), // Auto-assign position
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
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
        // Validate the request
        $request->validate([
            'name' => 'required|array',
            'name.en' => 'required|string',
            'name.bn' => 'required|string',
        ]);

        // Only check for name duplication if the name has changed
        $nameChanged = $category->name['en'] !== $request->name['en'] || $category->name['bn'] !== $request->name['bn'];

        if ($nameChanged) {
            // Check if the category name already exists for the combination of languages
            $exists = Category::where('id', '!=', $category->id)
                              ->where(function ($query) use ($request) {
                                  $query->whereJsonContains('name', ['en' => $request->name['en']])
                                        ->orWhereJsonContains('name', ['bn' => $request->name['bn']]);
                              })
                              ->exists();

            if ($exists) {
                return redirect()->back()->withErrors(['name' => 'The category name must be unique across all languages.'])->withInput();
            }
        }

        // Update the category
        $category->update([
            'name' => $request->name,
            'is_visible' => $request->has('is_visible') ? $request->is_visible : $category->is_visible,
            'position' => $request->position ?? $category->position,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
