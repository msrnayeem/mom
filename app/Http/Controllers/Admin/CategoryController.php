<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
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

        try {
            Category::create([
                'name' => $request->name,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : true, // Default to true
                'position' => Category::getNextPosition(), // Auto-assign position
            ]);

            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            // Store the exact SQL error message in the success session
            return redirect()->route('admin.categories.index')->with('success', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|array',
            'name.en' => 'required|string',
            'name.bn' => 'required|string',
            'is_visible' => 'nullable|boolean',
            'position' => 'nullable|integer',
        ]);


        // Update the category details
        try {
            $category->update([
                'name' => $request->name,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : $category->is_visible,
                'position' => $request->has('position') ? $request->position : $category->position,
            ]);

            return redirect()->route('admin.categories.index')->with('success', 'category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.categories.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
