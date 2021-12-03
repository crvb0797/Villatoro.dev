<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Tags extends Component
{
    use WithPagination;
    public $name, $color;
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
        'tag.name' => 'required',
        'tag.color' => 'required',
    ];



    public function mount()
    {

        $this->tag = new Tag();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function loadTag()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $tags = Tag::where('name', 'LIKE', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate();
        } else {
            $tags = [];
        }

        return view('livewire.admin.tags', compact('tags'));
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
    public function edit(Tag $tag)
    {
        $this->tag = $tag;
        $this->color = $tag;
        $this->open_edit = true;
    }
    public function update()
    {
        /* CON ESTO LOGRAMOS HACER LAS VALIDACIONES, LEE LA PROPIEDAD RULES */
        $this->validate();

        $this->tag->save();

        $this->reset(['open_edit']);

        $this->emit('alert', 'La etiqueta se actualizo con éxito 🚀');
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
    }
}
