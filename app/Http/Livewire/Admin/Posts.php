<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public $name;
    public $search = '';
    public $open_edit = false;
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

    public function delete(Post $post)
    {
        $post->delete();
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
                ->paginate();
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

    /* EDITAR UN POST */
    public function edit(Post $post)
    {
        $this->post = $post;
        $this->open_edit = true;
    }
    public function update()
    {
        /* CON ESTO LOGRAMOS HACER LAS VALIDACIONES, LEE LA PROPIEDAD RULES */
        $this->validate();

        $this->post->save();

        $this->reset(['open_edit']);

        $this->emit('alert', 'La categoría se actualizo con éxito 🚀');
    }
}
