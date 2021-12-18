<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = "id";
    public $direction = "desc";
    public $readyToLoad = false;

    /* OYENTE DEL EVENTO EMITIDO */
    protected $listeners = ['render', 'delete'];

    protected $queryString = [
        'search' => ['except' => ""]
    ];

    protected $rules = [
        'post.name' => 'required',
    ];


    public function mount()
    {

        $this->post = new Post();
    }

    public function delete($post)
    {
        Post::destroy($post);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function loadPost()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $posts = Post::where('name', 'LIKE', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(8);
        } else {
            $posts = [];
        }

        return view('livewire.admin.posts', compact('posts'));
    }



    /* AQUÍ HACEMOS EL FILTRADO POR CAMPO */
    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
