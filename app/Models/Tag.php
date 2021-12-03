<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'timestamps'];

    /* RELACIÓN N:N */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
