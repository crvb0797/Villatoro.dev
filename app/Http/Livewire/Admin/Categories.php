<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Categories extends Component
{
    public $name;
    public $search;
    public $open_edit = false;
    public $sort = 'id';
    public $direction = 'desc';
    public $readyToLoad = false;

    protected $listeners = ['render', 'delete'];

    protected $queryString = [
        'search' => ['except' => ""]
    ];

    protected $rules = [
        'category.name' => 'required',
    ];

    public function mount()
    {
        $this->name = new Category();
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

        $this->emit('alert', 'La catégoria se actualizo con éxito 👽');
    }

    public function delete(Category $category)
    {
        $category->delete();
    }

    public function loadPost()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $categories = Category::where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.admin.categories', compact('categories'));
    }

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
