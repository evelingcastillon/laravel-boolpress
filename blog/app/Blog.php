<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $fillable = ['title', 'image_url', 'paragraph', 'category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
