<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public function render()
    {
        $posts = Post::where('status', Post::PUBLICADO)->latest('id')->paginate(11);
        return view('livewire.posts', compact('posts'));
    }
}
