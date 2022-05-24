<?php

namespace App\Http\Livewire;

use App\Models\Mobile;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMobile extends Component
{

    use WithFileUploads;

    public $isOpen = false;
    public $marca, $modelo, $precio, $stock, $color, $almacenamiento, $pantalla, $chip;
    public $image;

    protected $rules = [
        'marca'=>['required'],
        'modelo'=>['required', 'string', 'min:3'],
        'precio'=>['required', 'numeric', 'min:100'],
        'stock'=>['required', 'integer', 'min:10', 'max:300'],
        'color'=>['required'],
        'almacenamiento'=>['required'],
        'pantalla'=>['required', 'string', 'min:10'],
        'chip'=>['required', 'string', 'min:10'],
        'image'=>['nullable', 'image', 'max:1024']
    ];

    public function render()
    {
        $marcas = ['Apple', 'Samsung', 'Xiaomi', 'Huawei'];
        $colores = ['Azul', 'Negro', 'Blanco', 'Plata', 'Oro', 'Rojo', 'Púrpura'];
        $almacenamientos = ['64GB', '128GB', '256GB', '512GB', '1TB'];
        return view('livewire.create-mobile', compact('marcas', 'colores', 'almacenamientos'));
    }

    public function crear() {
        $this->validate();
        $imagen = ($this->image) ? $this->image->store('mobile') : 'default.png';
        Mobile::create([
            'marca'=>$this->marca,
            'modelo'=>$this->modelo,
            'precio'=>$this->precio,
            'stock'=>$this->stock,
            'color'=>$this->color,
            'almacenamiento'=>$this->almacenamiento,
            'pantalla'=>$this->pantalla,
            'chip'=>$this->chip,
            'image'=>$imagen
        ]);
        $this->emitTo('index-mobiles', 'render');
        $this->reset(['isOpen', 'image', 'marca', 'modelo', 'precio', 'stock', 'color', 'almacenamiento', 'pantalla', 'chip']);
        $this->emit('info', 'Móvil creado correctamente');
    }
}
