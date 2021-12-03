<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class CreateTag extends Component
{
    public $name, $color;
    public $open = false;

    protected $rules = [
        'name' => 'required|unique:categories',
        'color' => 'required'
    ];

    public function render()
    {
        $tags = Tag::all();
        return view('livewire.admin.create-tag', compact('tags'));
    }

    public function save()
    {
        $this->validate();
        Tag::create([
            'name' => $this->name,
            'color' => $this->color,
        ]);

        $this->reset(['open', 'name', 'color']);


        $this->emit('render');
        $this->emit('alert', 'La etiqueta se creo con exito 🍕');
    }
}
