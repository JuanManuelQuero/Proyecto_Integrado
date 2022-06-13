<?php

namespace App\Http\Livewire;

use App\Models\Mobile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IndexMobiles extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $buscar = "";
    public $campo = 'id';
    public $orden = 'desc';
    public $isOpen = false;
    public Mobile $mobile;
    public $image;

    protected $listeners = ['render'];
    protected $rules = [
        'mobile.marca'=>['required'],
        'mobile.modelo'=>['required', 'string', 'min:3'],
        'mobile.precio'=>['required', 'numeric', 'min:100'],
        'mobile.stock'=>['required', 'integer', 'min:1', 'max:300'],
        'mobile.color'=>['required'],
        'mobile.almacenamiento'=>['required'],
        'mobile.pantalla'=>['required', 'string', 'min:10'],
        'mobile.chip'=>['required', 'string', 'min:10'],
        'image'=>['nullable', 'image', 'max:1024']
    ];

    public function mount() {
        $this->mobile = new Mobile;
    }

    public function updatingBuscar() {
        $this->resetPage();
    }

    public function render()
    {
        $marcas = ['Apple', 'Samsung', 'Xiaomi', 'Huawei'];
        $colores = ['Azul', 'Negro', 'Blanco', 'Plata', 'Oro', 'Rojo', 'Púrpura'];
        $almacenamientos = ['64GB', '128GB', '256GB', '512GB', '1TB'];
        $mobiles = Mobile::orderBy($this->campo, $this->orden)
        ->where('marca', 'like', "%".$this->buscar."%")
        ->orWhere('modelo', 'like', "%".$this->buscar."%")
        ->paginate(5);
        return view('livewire.index-mobiles', compact('mobiles', 'marcas', 'colores', 'almacenamientos'));
    }

    public function ordenar($campo) {
        if($campo == $this->campo) {
            $this->orden = ($this->orden == 'desc') ? 'asc' : 'desc';
        } else {
            $this->campo = $campo;
        }
    }

    public function borrar(Mobile $mobile) {
        if(basename($mobile->image) != 'default.png') {
            Storage::delete($mobile->image);
        }
        $mobile->delete();
        $this->emit('info', "Móvil borrado correctamente");
    }

    public function edit(Mobile $mobile) {
        $this->mobile = $mobile;
        $this->isOpen = true;
    }

    public function actualizar() {
        if($this->image) {
            if(basename($this->mobile->image) != 'default.png') {
                Storage::delete($this->mobile->image);
            }
            $imagen = $this->image->store('mobile');
            $this->mobile->image = $imagen;
        }

        $this->mobile->update();
        $this->reset(['isOpen', 'image']);
        $this->emit('info', 'Móvil actualizado correctamente');
    }
}
