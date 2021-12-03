<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public $open = false;

    protected $rules = [
        'name' => 'required|unique:categories'
    ];

    public function render()
    {
        return view('livewire.admin.create-category');
    }

    public function save()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,
        ]);

        $this->reset(['open', 'name']);


        $this->emit('render');
        $this->emit('alert', 'La categoría se creo con exito 🍕');
    }
}
