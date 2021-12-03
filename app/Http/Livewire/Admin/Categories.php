<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
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
        'category.name' => 'required',
    ];



    public function mount()
    {

        $this->category = new Category();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $categories = Category::where('name', 'LIKE', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate();
        } else {
            $categories = [];
        }

        return view('livewire.admin.categories', compact('categories'));
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
    public function edit(Category $category)
    {
        $this->category = $category;
        $this->open_edit = true;
    }
    public function update()
    {
        /* CON ESTO LOGRAMOS HACER LAS VALIDACIONES, LEE LA PROPIEDAD RULES */
        $this->validate();

        $this->category->save();

        $this->reset(['open_edit']);

        $this->emit('alert', 'La categoría se actualizo con éxito 🚀');
    }

    public function delete(Category $category)
    {
        $category->delete();
    }
}
