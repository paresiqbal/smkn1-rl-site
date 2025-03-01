<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function showNews()
    {
        $news = News::orderBy('date', 'desc')->get();

        return view('admin.news.index', compact('news'));
    }

    public function showStoreNews()
    {

        return view('admin.news.news-create');
    }

    /**
     * Store a newly created news post in storage.
     */
    public function storeNews(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'date'    => 'required|date',
            'image'   => 'nullable|image|max:3048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
        }

        News::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'date'    => $validated['date'],
            'user_id' => Auth::id(),
            'image'   => $imagePath,
        ]);


        return redirect()->back()->with('success', 'News created successfully!');
    }
}
