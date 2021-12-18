<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $search = '';
    public $sort = "id";
    public $direction = "desc";
    public $readyToLoad = false;

    protected $queryString = [
        'search' => ['except' => ""]
    ];

    public function loadUser()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $users = ModelsUser::where('name', 'LIKE', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate();
        } else {
            $users = [];
        }
        return view('livewire.admin.user', compact('users'));
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
