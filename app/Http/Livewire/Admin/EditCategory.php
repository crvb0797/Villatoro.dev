<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category;

    protected $rules = [
        'category.name' => 'required'
    ];

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function save()
    {
        $this->validate();
        $this->category->save();


        $this->emit('render');
        $this->emit('userEdit');
        $this->emit('alert', 'La categoría se actualizo con exito 🚀');
    }

    public function render()
    {
        return view('livewire.admin.edit-category');
    }
}
