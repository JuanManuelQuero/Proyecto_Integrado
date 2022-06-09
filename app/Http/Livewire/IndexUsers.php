<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $buscar = "";
    public $campo = 'id';
    public $orden = 'desc';
    public $isOpen = false;
    public User $user;

    protected $rules = [
        'user.name' => ['required'],
        'user.email'=> ['required'],
        
    ];

    public function mount() {
        $this->user = new User;
    }

    public function updatingBuscar() {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::orderBy($this->campo, $this->orden)
        ->where('name', 'like', "%".$this->buscar."%")
        ->orWhere('email', 'like', "%".$this->buscar."%")
        ->paginate(5);
        return view('livewire.index-users', compact('users'));
    }

    public function ordenar($campo) {
        if($campo == $this->campo) {
            $this->orden = ($this->orden == 'desc') ? 'asc' : 'desc';
        } else {
            $this->campo = $campo;
        }
    }

    public function borrar(User $user) {
        $user->delete();
        $this->emit('info', "Usuario eliminado correctamente");
    }

    public function edit(User $user) {
        $this->user = $user;
        $this->isOpen = true;
    }

    public function actualizar() {
        $this->user->update();
        $this->reset(['isOpen']);
        $this->emit('info', 'Usuario actualizado correctamente');
    }
}
