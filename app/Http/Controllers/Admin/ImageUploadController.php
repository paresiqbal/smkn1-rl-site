<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    /**
     * Handle image upload from Quill editor.
     */
    public function uploadImage(Request $request)
    {
        $request->validate(['image' => 'required|image|max:3048']);

        $imagePath = $request->file('image')->store('news_images', 'public');

        return response()->json([
            'url' => asset('storage/' . $imagePath),
        ]);
    }
}
