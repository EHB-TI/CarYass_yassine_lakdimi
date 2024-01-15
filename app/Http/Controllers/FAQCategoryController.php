<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQCategory;

class FAQCategoryController extends Controller
{
    public function index()
    {
        $categories = FAQCategory::all();
        return view('faq-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('faq-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:faq_categories|max:255',
        ]);

        FAQCategory::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('faq-categories.index')->with('success', 'Category created successfully');
    }

    public function edit(FAQCategory $category)
    {
        return view('faq-categories.edit', compact('category'));
    }

    public function update(Request $request, FAQCategory $category)
    {
        $request->validate([
            'name' => 'required|unique:faq_categories,name,' . $category->id . '|max:255',
        ]);

        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('faq-categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(FAQCategory $category)
    {
        $category->delete();
        return redirect()->route('faq-categories.index')->with('success', 'Category deleted successfully');
    }
}
