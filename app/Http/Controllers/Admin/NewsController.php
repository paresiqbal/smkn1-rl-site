<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tags;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with(['author', 'tags'])->orderBy('published_at', 'desc')->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function showCreate()
    {
        $tags = Tags::all();

        return view('admin.news.store', compact('tags'));
    }
}
