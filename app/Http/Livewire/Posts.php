<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    public $category_id;
    protected $queryString = [
        'category_id'
    ];

    use WithPagination;
    public function render()
    {
        $categories = Category::all();
        $posts = Post::where('status', Post::PUBLICADO)
            ->category($this->category_id)
            ->latest('id')
            ->paginate(11);
        return view('livewire.posts', compact('posts', 'categories'));
    }

    public function resetFilters()
    {
        $this->reset(['category_id']);
    }
}
