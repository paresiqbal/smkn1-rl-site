<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Allow mass assignments for our fields
    protected $fillable = [
        'title',
        'content',
        'date',
        'user_id',
    ];

    /**
     * The News belongs to a User (the author).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
