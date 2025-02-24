<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'author_id',
        'published_at',
    ];

    /**
     * Get the user that authored the news.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * The tags that belong to the news.
     */
    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'news_tag', 'news_id', 'tag_id');
    }
}
