<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    /* QUERY SCOPE */
    public function scopeCategory($query, $category_id)
    {
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
    }

    /* RELACION 1:N INVERSA */

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /* RELACIÓN N:N */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /* RELACION 1:1 POLIMORFICA */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /* URL AMIGABLE */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
