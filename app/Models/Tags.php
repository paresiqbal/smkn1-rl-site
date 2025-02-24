<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name'];

    /**
     * Get the news items associated with the tag.
     */
    public function news()
    {
        return $this->belongsToMany(News::class, 'news_tag', 'tag_id', 'news_id');
    }
}
