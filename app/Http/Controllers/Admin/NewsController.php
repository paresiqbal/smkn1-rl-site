<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with(['author', 'tags'])->orderBy('published_at', 'desc')->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'author_id'    => 'required|exists:users,id',
            'published_at' => 'nullable|date',
            'image'        => 'nullable|image',
            'tags'         => 'nullable|array',
            'tags.*'       => 'exists:tags,id'
        ]);

        $data = $request->only(['title', 'content', 'author_id', 'published_at']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news = News::create($data);

        // Sync tags if any are provided
        if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        }

        return redirect()->route('admin.news')->with('success', 'News article created successfully.');
    }
}
