<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Show the form for creating a new news post.
     */
    public function showNews()
    {
        return view('admin.news.index');
    }

    /**
     * Store a newly created news post in storage.
     */
    public function storeNews(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'date'    => 'required|date',
        ]);

        News::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'date'    => $validated['date'],
            'user_id' => Auth::id(),
        ]);

        // Redirect or return response as needed
        return redirect()->back()->with('success', 'News created successfully!');
    }
}
