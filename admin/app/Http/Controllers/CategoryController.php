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

        try {
            Category::create([
                'name' => $request->name,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : true, // Default to true
                'position' => Category::getNextPosition(), // Auto-assign position
            ]);

            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            // Store the exact SQL error message in the success session
            return redirect()->route('categories.index')->with('success', $e->getMessage());
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
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Course $course)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|array',
            'name.en' => 'required|string',
            'name.bn' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ]);

        // Only check for name duplication if the name has changed
        $nameChanged = $course->name['en'] !== $request->name['en'] || $course->name['bn'] !== $request->name['bn'];

        if ($nameChanged) {
            // Check if the course name already exists for the combination of languages
            $exists = Course::where('id', '!=', $course->id)
                            ->where(function ($query) use ($request) {
                                $query->whereJsonContains('name', ['en' => $request->name['en']])
                                      ->orWhereJsonContains('name', ['bn' => $request->name['bn']]);
                            })
                            ->exists();

            if ($exists) {
                return redirect()->back()->withErrors(['name' => 'The course name must be unique across all languages.'])->withInput();
            }
        }

        // Update the course details
        try {
            $course->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : $course->is_visible,
            ]);

            return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('error', 'Error: ' . $e->getMessage());
        }
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
