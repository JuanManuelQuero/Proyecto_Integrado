<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'precio', 'stock', 'color', 'almacenamiento', 'pantalla', 'chip', 'image'];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    //Método para buscar
    public function scopeModelo($query, $v) {
        if(!isset($v)) {
            return $query->where('modelo', 'like', '%')->orWhere('marca', 'like', '%');
        }
        return $query->where('modelo', 'like', "%$v%")->orWhere('marca', 'like', "%$v%");
    }
}
