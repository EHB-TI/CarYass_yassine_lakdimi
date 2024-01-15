<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\FAQCategory;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('faq.index', compact('faqs'));
    }

    public function userIndex()
{
    $faqs = FAQ::all();
    return view('faq.user_index', compact('faqs'));
}


    public function create()
    {
        $categories = FAQCategory::all();
        return view('faq.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        FAQ::create([
            'category_id' => $request->input('category_id'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully');
    }

    public function edit(FAQ $faq)
    {
        $categories = FAQCategory::all();
        return view('faq.edit', compact('faq', 'categories'));
    }

    public function update(Request $request, FAQ $faq)
    {
        $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $faq->update([
            'category_id' => $request->input('category_id'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully');
    }
}
