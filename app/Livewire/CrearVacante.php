<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public $titulo;
    public $sueldo;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    protected $rules = [
        'titulo' => 'required|string',
        'sueldo' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
    ];
        
    public function render()
    {   
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante',compact(['salarios','categorias']));
    }
}
