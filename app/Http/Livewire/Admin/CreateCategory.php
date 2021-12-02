<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|unique:categories'
    ];

    public function render()
    {
        return view('livewire.admin.create-category');
    }

    private function resetInputFields()
    {
        $this->name = '';
    }

    public function store()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
        ]);

        $this->resetInputFields();


        $this->emit('render');
        $this->emit('userStore');
        $this->emit('alert', 'La categoría se creo con exito 🍕');
    }
}
